<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'ci' => '8441659',
            'nombres' => 'Enrique L.',
            'apellidoPaterno' => 'Barra',
            'apellidoMaterno' => 'Paredes',
            'tipo' => 'administrador',
            'estado' => 'activo',
            'imagen' => 'adminFoto.jpg',
            'fechaNacimiento' => '2001-05-03',
            'email' => 'barra.paredes.enrique.luis@gmail.com',
            'password' => bcrypt('Rildito123.'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
