<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RecoveryPasswordRequest;
use App\Http\Requests\RegisterRequest;
use App\Mail\RecoveryPassword;
use App\Models\MoneyBox;
use App\Models\Student;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Storage;
use Resend\Laravel\Facades\Resend;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password as PasswordRules;


class AuthController extends Controller
{
    function login(LoginRequest $request)
    {
        //Validar
        $data = $request->validated();

        //Revisar el password
        if (!Auth::attempt($data)) {
            return response([
                'errors' => ['El usuario o el password son incorrectos']
            ], 422);
        }

        //Autenticar al usuario
        $user = Auth::user();
        if ($user) {
            $token = $user->createToken('token')->plainTextToken;
        }
        $user->imagen = asset('storage/perfiles/' . $user->imagen);

        //Obtener si es encargado de caja chica

        $money_box = MoneyBox::find('1')->where('user_id', '=', $user->id)->get();

        if (isset($money_box[0]['user_id'])) {
            $user->encargado_caja_chica = 'Es encargado';
        } else {
            $user->encargado_caja_chica = 'No es encargado';
        };
        return [
            'token' => $token,
            'user' => $user,
        ];
    }

    function register(RegisterRequest $request)
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

            if ($data['tipo'] === 'estudiante') {
                Student::create([
                    'user_id' => $user['id'],
                    'ru' => $data['ru'],
                    'mention_id' => $data['mencion']
                ]);
            }

            DB::commit();
            $user->imagen = asset('storage/perfiles/' . $user->imagen);

            return [
                "token" => $user->createToken('token')->plainTextToken,
                'user' => $user,
            ];

        } catch (\Exception $e) {
            DB::rollBack();
            return response([
                'errors' => ['Ocurrio algo inesperado con el servidor: '.$e->getMessage()]
            ], 422);
        }
    }

    function logout(Request $request)
    {

        $user = $request->user();
        $user->currentAccessToken()->delete();

        return [
            'user' => null
        ];
    }

    function recover_password(RecoveryPasswordRequest $request)
    {
        $data = $request->validated();

        $token = Str::random(64);

        DB::table('password_reset_tokens')->where(['email' => $data['email']])->delete();

        DB::table('password_reset_tokens')->insert([
            'email' => $data['email'],
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        Resend::emails()->send([
            'from' => 'Acme <onboarding@resend.dev>',
            'to' => [$data['email']],
            'subject' => 'Recuperación de correo electronico',
            'html' => (new RecoveryPassword($token, $data['email']))->render(),
        ]);

        return [
            "message" => "Se envio el email correctamente",
        ];
    }

    function upgrade_password(Request $request)
    {

        $data = $request->validate([
            'password' => ['required', 'confirmed', PasswordRules::min(8)->letters()->symbols()->numbers()],
            'email' => ['required', 'email', 'exists:users,email'],
        ], [
            'password' => 'El password debe contener al menos 8 caracteres, un simbolo y un número',
            'email.required' => 'El email es obligatorio',
            'email.email' => 'El email no tiene un formato valido',
            'email.exists' => 'No existe un email con ese registro',
        ]);

        $user = User::where('email', $data['email'])->first();
        $user->password = Hash::make($data['password']);

        $user->save();

        $token = $user->createToken('token')->plainTextToken;
        $user->imagen = asset('storage/perfiles/' . $user->imagen);

        //Obtener si es encargado de caja chica

        $money_box = MoneyBox::find('1')->where('user_id', '=', $user->id)->get();

        if (isset($money_box[0]['user_id'])) {
            $user->encargado_caja_chica = 'Es encargado';
        } else {
            $user->encargado_caja_chica = 'No es encargado';
        };

        return [
            'token' => $token,
            'user' => $user,
            'message' => 'Se actualizo correctamente la contraseña'
        ];
    }
}
