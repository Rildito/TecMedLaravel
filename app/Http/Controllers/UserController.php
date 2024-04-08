<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserCollection;
use App\Models\MoneyBox;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password as PasswordRules;

class UserController extends Controller
{

    public function getUsers()
    {
        return new UserCollection(User::where('estado', 'activo')->get());
    }

    public function getUsersActivated()
    {
        return new UserCollection(User::where('estado', 'Sin activar')->get());
    }

    public function getCollaboratorsAvailable($idCorrespondence)
    {
        return new UserCollection(User::whereDoesntHave('correspondences', function ($query) use ($idCorrespondence) {
            $query->where('correspondence_id', $idCorrespondence);
        })->get());
    }

    public function getUser($id)
    {
        $user = User::with('student.mention')->find($id);
        $rutaArchivo =  asset('storage/perfiles/' . $user->imagen);
        $user->imagen = $rutaArchivo;
        return $user;
    }

    public function getAdministrativos()
    {
        return new UserCollection(User::with('student')->where('tipo', '=', 'administrativo')->get());
    }

    public function createUser(RegisterRequest $request)
    {
        DB::beginTransaction();
        //Validar el registro
        $data = $request->validated();

        try {
            //FotoPerfil
            $perfil = $request->file("perfil");
            $extension = $perfil->getClientOriginalExtension();
            $namePerfil = Str::random(36) . '.' . $extension;
            Storage::disk('local')->put('/public/perfiles/' . $namePerfil, file_get_contents($perfil));
            $estado = 'activo';
            //Crear el usuario y estudiante
            if ($data['tipo'] === 'administrativo') {
                $estado = 'Sin activar';
            }

            if ($data['tipo'] === 'colaborador') {
                $estado = 'Sin activar';
            }

            $user = User::create([
                'ci' => $data['ci'],
                'nombres' => $data['name'],
                'apellidoPaterno' => $data['app'],
                'apellidoMaterno' => $data['apm'],
                'tipo' => $data['tipo'],
                'estado' => $estado,
                'imagen' => $namePerfil,
                'fechaNacimiento' => $data['date'],
                'email' => $data['email'],
                'password' => bcrypt($data['password'])
            ]);

            if ($data['tipo'] == 'estudiante') {
                Student::create([
                    'user_id' => $user['id'],
                    'ru' => $data['ru'],
                    'mention_id' => $data['mencion']
                ]);
            }

            DB::commit();
            return [
                'message' => 'Usuario creado correctamente'
            ];
        } catch (\Exception $e) {
            DB::rollBack();
            return response([
                'errors' => ['Ocurrio algo inesperado con el servidor: ' . $e->getMessage()]
            ], 422);
        }
    }

    public function editUser($id, Request $request)
    {
        $request->validate(
            [
                'name' => ['required', 'string'],
                'app' => ['required', 'string'],
                'apm' => ['required', 'string'],
                'date' => ['required', 'date'],
                'ci' => ['required', 'string', 'unique:users,ci,' . $id],
                'ru' => ['required', 'string', Rule::unique('students', 'ru')->ignore($id, 'user_id')],
                'mencion' => ['required', 'string'],
                'email' => ['required', 'email', 'unique:users,email,' . $id],
                'tipo' => ['required']
            ],
            [
                'name.required' => 'El nombre es obligatorio',
                'app.required' => 'El apellido pat es obligatorio',
                'apm.required' => 'El apellido mat es obligatorio',
                'date.required' => 'La fecha de nacimiento es obligatorio',
                'ci.required' => 'El carnet es obligatorio',
                'ci.unique' => 'Ya existe un carnet con ese registro escriba otro',
                'ru.required' => 'El registro universitario es obligatorio',
                'ru.unique' => 'Ya existe un registro universitario con ese registro escriba otro',
                'mencion.required' => 'La mencion es obligatoria',
                'email.required' => 'El email es obligatorio',
                'email.email' => 'El email no tiene un formato valido',
                'email.unique' => 'Ya existe un email con ese registro escriba otro',
                'tipo' => 'El tipo de usuario es obligatorio'
            ]
        );

        DB::beginTransaction();

        try {
            $user = User::with('student')->find($id);

            //Verificando documento  
            $rutaArchivo =  'public/perfiles/' . $user->imagen;
            // $infoArchivo = pathinfo($rutaArchivo);

            $perfil = $request->file("perfil");

            // $nameDocumento = $documento->getClientOriginalName();
            if ($perfil != null) {
                Storage::delete($rutaArchivo);
                $extension = $perfil->getClientOriginalExtension();
                $namePerfil = Str::random(36) . '.' . $extension;
                Storage::disk('local')->put('/public/perfiles/' . $namePerfil, file_get_contents($perfil));
                $user->imagen = $namePerfil;
            }

            $user->nombres = $request->name;
            $user->apellidoPaterno = $request->app;
            $user->apellidoMaterno = $request->apm;
            $user->ci = $request->ci;
            $user->fechaNacimiento = $request->date;
            $user->email = $request->email;
            $user->tipo = $request->tipo;

            if ($request->mencion != 'Sin mencion') {
                $student = Student::where('user_id','=',$request->id)->first();
                $student->ru = $request->ru;
                $student->mention_id = $request->mencion;
                $student->save();
            }

            $user->save();
            DB::commit();
            return [
                "message" => "Usuario editado correctamente"
            ];
        } catch (\Throwable $th) {
            DB::rollBack();
            return response([
                'errors' => ['Ocurrio algo inesperado con el servidor: ' . $th->getMessage()]
            ], 422);
        }
    }



    public function deleteUser($id)
    {
        DB::beginTransaction();

        try {
            $user = User::find($id);
            $rutaArchivo =  'public/perfiles/' . $user->imagen;
            
            $money_box = MoneyBox::find(1);

            if ($money_box->user_id === $user->id) {
                $money_box->user_id = null;
            }

            $money_box->save();
            
            $user->delete();
            Storage::delete($rutaArchivo);

            DB::commit();
            return [
                "message" => "Usuario eliminado"
            ];
        } catch (\Throwable $th) {
            DB::rollBack();
            return response([
                'errors' => ['Ocurrio algo inesperado con el servidor: ' . $th->getMessage()]
            ], 422);
        }
    }

    public function activatedUser($id)
    {
        $user = User::find($id);
        $user->estado = 'activo';
        $user->save();
        return [
            'message' => 'Usuario activado correctamente'
        ];
    }

    public function recoverPassword($id) {
        $user = User::find($id);
        $user->resetear = '1';
        $user->password = bcrypt($user->ci);
        $user->save();
        return [
            'message' => 'Contraseña reseteada correctamente'
        ];
    }

    public function updatePassword(Request $request) {
        

        $data = $request->validate([
            'password' => ['required', 'confirmed', PasswordRules::min(8)->letters()->symbols()->numbers()],
        ], [
            'password' => 'El password debe contener al menos 8 caracteres, un simbolo y un número',
        ]);

        $usuario = User::find($request->id);
        $usuario->password = bcrypt($data['password']);
        $usuario->resetear = '0';
        $usuario->save();
        $rutaArchivo = asset('storage/perfiles/' . $usuario->imagen);
        $usuario->imagen = $rutaArchivo;
        return ['user' => $usuario];
    }
}
