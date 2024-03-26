<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        /**BIOIMAGENOLOGIA */
        DB::table('subjects')->insert([
            'nombre' => 'Metodología de la investigación',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Informática aplicada',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Inglés técnico',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Anatomía humana normal',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Embriología y genética',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Histología básica normal',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Primeros auxilios',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Introduccion a la Bio-imagenología',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Fisica de las radiaciones',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Bioestadística',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Fisiología y biofísica',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Bioquímica aplicada',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Farmacología aplicada',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Patología general',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Radiobiología y protección radiológica',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Radiologia I',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Mamografía y densitometría ósea',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Anatomía radiológica I',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Semiología radiologíca aplicada',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Salud pública y epidemiología',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Psicología aplicada',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Administración y gestion en salud',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Radiología II',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Radiología dental - maxilofacial',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Radiología veterinaria',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Anatomía Radiológica II',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Tomografía',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('subjects')->insert([
            'nombre' => 'Resonancia magnética nuclear',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('subjects')->insert([
            'nombre' => 'Ultrasonografía',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('subjects')->insert([
            'nombre' => 'Medicina nuclear',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('subjects')->insert([
            'nombre' => 'Radioterapia',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('subjects')->insert([
            'nombre' => 'Radiología Pediátrica',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('subjects')->insert([
            'nombre' => 'Deontología y radiología forense',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('subjects')->insert([
            'nombre' => 'Electromedicina aplicada',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('subjects')->insert([
            'nombre' => 'Radiología intervencionista',
            'mention_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        /**LABORATORIO CLINICO */

        DB::table('subjects')->insert([
            'nombre' => 'Anatomica humana basica',
            'mention_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Biologia y genetica',
            'mention_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Bioquímica',
            'mention_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Fisiología humana - biofisica',
            'mention_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Histología',
            'mention_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Introducción a laboratorio',
            'mention_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Primeros auxilios',
            'mention_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Quimíca inorganica y organica',
            'mention_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Salud publica',
            'mention_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Cipatología',
            'mention_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Hematología',
            'mention_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Inmunología',
            'mention_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Micología',
            'mention_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Microbiología',
            'mention_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Parasitología',
            'mention_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Patología clinica',
            'mention_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Patología general',
            'mention_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Tecnicas de patología',
            'mention_id' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        /**FISIOTERAPIA Y KINESIOLOGIA */
        DB::table('subjects')->insert([
            'nombre' => 'Anatomia funcional',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Metodología de la investigación I',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Fisiología aplicada',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Histología aplicada',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Primeros auxilios',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Embriología',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Electroterapia',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Nosología clínica',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Fisioterapia general',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Cinesiterapia',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Kinesiología',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Mecanoterapia',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Bioquímica aplicada',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Neurología evolutiva y psicomotricidad',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Técnicas kinesicas especiales I',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Técnicas kinesicas especiales II',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Farmacología aplicada',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Biomecánica',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Imagenología aplicada',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Semiopatología kinésica',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Ergonomía funcional',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Fisioterapia aplicada I',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Fisioterapia aplicada II',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Gerencia y administración en salud',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Rehabilitación en base a la comunidad',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Metodología de la investigación II',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Técnicas de revitalización geriatrica',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Terapias alternativas',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('subjects')->insert([
            'nombre' => 'Fisioterapia del deporte y la actividad física',
            'mention_id' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
