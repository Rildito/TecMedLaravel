<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserController extends Controller
{

    public function getUsers()
    {
        return new UserCollection(User::where('estado','activo')->get());
    }

    public function getUsersActivated()
    {
        return new UserCollection(User::where('estado','Sin activar')->get());
    }

    public function getCollaboratorsAvailable($idCorrespondence) {
        return new UserCollection(User::whereDoesntHave('correspondences', function ($query) use ($idCorrespondence) { $query->where('correspondence_id', $idCorrespondence);})->get());
    }

    public function getUser($id)
    {
        $user = User::with('student')->find($id);
        $rutaArchivo =  asset('storage/perfiles/' . $user->imagen);
        $user->imagen = $rutaArchivo;
        return $user;
    }

    public function getAdministrativos()
    {
        return new UserCollection(User::with('student')->where('tipo', '=', 'administrativo')->get());
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
                'ru' => ['required', 'string', 'unique:students,ru,' . $id],
                'mencion' => ['required', 'string'],
                'email' => ['required', 'email', 'unique:users,email,'.$id],
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
                $student = Student::find($request->id);
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
                'errors' => ['Ocurrio algo inesperado con el servidor: '.$th->getMessage()]
            ], 422);
        }
       
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();

        return [
            "message" => "Usuario eliminado"
        ];
    }

    public function activatedUser($id) {
        $user = User::find($id);
        $user->estado = 'activo';
        $user->save();
        return [
            'message' => 'Usuario activado correctamente'
        ];
    }
}
