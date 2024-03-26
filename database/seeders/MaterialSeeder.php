<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('materials')->insert([
            'inventory_id' => "1",
            'nombre' => 'Control de data',
            'cantidad_disponible' => 5,
            'cantidad_utilizada' => 5,
            'estado' => 'disponible',
            'descripcion' => 'Control del data que sirve para el manejo de los datas instalados en las aulas.',
            'imagen' => 'control.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('materials')->insert([
            'inventory_id' => "1",
            'nombre' => 'Parlantes',
            'cantidad_disponible' => 1,
            'cantidad_utilizada' => 1,
            'estado' => 'disponible',
            'descripcion' => 'Parlantes de computadora, son pequeños y vienen en pares.',
            'imagen' => 'parlantes.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('materials')->insert([
            'inventory_id' => "1",
            'nombre' => 'Laptop',
            'cantidad_disponible' => 3,
            'cantidad_utilizada' => 3,
            'estado' => 'disponible',
            'descripcion' => 'Computadora de escritorio movil, esencial para las clases de los docentes.',
            'imagen' => 'laptop.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('materials')->insert([
            'inventory_id' => "1",
            'nombre' => 'Proyector',
            'cantidad_disponible' => 1,
            'cantidad_utilizada' => 1,
            'estado' => 'disponible',
            'descripcion' => 'Conocido como data mayormente.',
            'imagen' => 'data.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('materials')->insert([
            'inventory_id' => "1",
            'nombre' => 'Carlitos',
            'cantidad_disponible' => 1,
            'cantidad_utilizada' => 1,
            'estado' => 'disponible',
            'descripcion' => 'Esqueleto casi tamaño real para aprendizaje',
            'imagen' => 'carlitos.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('materials')->insert([
            'inventory_id' => "1",
            'nombre' => 'Cable vga',
            'cantidad_disponible' => 1,
            'cantidad_utilizada' => 1,
            'estado' => 'disponible',
            'descripcion' => 'Utilizado para conectar entre un data y una computadora',
            'imagen' => 'cablevga.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
