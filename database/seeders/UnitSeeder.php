<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Area central

        DB::table('units')->insert([
            'nombre' => 'Dpto. de Auditoria Interna',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Dpto. de Relaciones Internacionales',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Dpto. de Planificación, Evaluación y Acreditación (DPEC)',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'División de Evaluación, Acreditación y Gestión de Calidad',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Dpto. de Información y Comunicación',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Televisión Universitaria',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Unidad de Transparencia',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Comisión de Cultura del HCU',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Comisión de Saneamiento Tec. Legal de Propiedades Universitarios',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Comisión de Infraestructura del HCU',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Defensoría Universitaria',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'División de Apoyo al Norte Amazónico (DANA)',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'UMSA Solidaria',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Seguro Social Universitario - SSU',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Radio San Andrés',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Programa de Cine y Producción Audiovisual',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'VICERRECTORADO',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Secretaria Academica',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Dpto. de Personal Docente',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Div. de Escalafón y Curriculum Docente',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Fed. Sind. de Docentes de la UMSA (FEDSIDUMSA)',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Dpto. de Investigación Postgrado e Interacción Social (DIPGIS)',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Dpto. de Bienestar Social',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Div. de Trabajo Social',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Div. de Salud',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Sección de Becas Académicas',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Sección de Deportes',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Comisión Bienestar Social del HCU',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Centro Infantil Universitario Andresito',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Seccion de Cultura, Teatro y Coro',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Div. de Redes y Sistemas de Información',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Dpto. de Tecnologías de Información y Comunicación (DTIC)',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Div. de Sistemas de Información y Estadística',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Div. de Gestiones, Admisiones y Registros',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Div. de Biblioteca Central',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Inst. de Desarrollo Regional y Desconcentración Universitaria (IDR-DU)',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'CIDES',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'CIDES - Sub Dirección de Formación',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'CIDES - Subdirección de Investigación',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'CIDES - Subdirección de Interacción Social',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'CIDES - Unidad de Administración Desconcentrada',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'CEPIES',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'CEPIES - Comunicación y Marketing',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'CEPIES - Kardex',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'CEPIES - Coordinación de Maestría y Diplomados',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'CEPIES - Coordinación de Doctorado y Postdoctorado',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'CEPIES - Area Desconcentrada',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'CEPIES - Unidad de Sistemas',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'CEPIES - Biblioteca',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'CEPIES - Procuraduría',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'CEPIES - METSIBO',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Sind. de Trabajadores de la UMSA (STUMSA)',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Consejo Académico Universitario - CAU',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'SECRETARIA GENERAL',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Div. de Títulos y Diplomas',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Div. de Documentos y Archivo',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Div. de Desarrollo de Talento Humano',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Imprenta Universitaria',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Div. de Culturas y Artes',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Div. de Estratégias Comunicacionales',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Tribunal de Procesos Universitarios',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Tribunal de Garantias Electorales',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Administración Central',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'DIRECCION ADMINISTRATIVA FINANCIERA',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Comisión Administrativa Financiera - HCU',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Dpto. de Presupuesto y Planificación Financiera',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Dpto. de Tesoro Universitario',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Caja Monoblock central',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Gestoría - Departamento Tesoro Universitario',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Sección Técnica de Operaciones Tributarias',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Dpto. de Contabilidad',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Archivo Contable',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        DB::table('units')->insert([
            'nombre' => 'Div. de Adquisiciones',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Almacén Central',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Div. de Bienes e Inventarios',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Dpto. de Recursos Humanos Administrativos',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Div. de Desarrollo de RRHH',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Div. de Acciones y Control',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Div. de Remuneraciones Administrativas',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Programa Permanente de Capacitación Administrativa - PPCAD',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Dpto. de Infraestructura',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Unidad de Transporte',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Área Desconcentrada de la Administración Central ADC',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Federación Universitaria Local (FUL)',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'Federación Universitaria Local - HCU',
            'area' => 'Area central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //Bibliotecas

        DB::table('units')->insert([
            'nombre' => 'FCEF - Carrera Administración de Empresas - Biblioteca',
            'area' => 'Bibliotecas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCEF - Carrera de Economía - Biblioteca',
            'area' => 'Bibliotecas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FAR - Biblioteca Especializada',
            'area' => 'Bibliotecas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'MED - Biblioteca central',
            'area' => 'Bibliotecas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FODT - Biblioteca',
            'area' => 'Bibliotecas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'AGR - Biblioteca',
            'area' => 'Bibliotecas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FAADU - Biblioteca (Arquitectura)',
            'area' => 'Bibliotecas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCG - Biblioteca',
            'area' => 'Bibliotecas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FHCE - Biblioteca',
            'area' => 'Bibliotecas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FDCP - Carrera de Derecho - Biblioteca',
            'area' => 'Bibliotecas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'ING - Biblioteca Central - Facultad de Ingeniería',
            'area' => 'Bibliotecas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FHCE - Carrera de Psicología - Biblioteca',
            'area' => 'Bibliotecas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'TEC - Biblioteca Central',
            'area' => 'Bibliotecas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Carreras

        DB::table('units')->insert([
            'nombre' => 'FCPN - Carrera de Química',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCPN - Carrera de Estadística',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCPN - Centro de Estudiantes (Carrera de Estadistica)',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCPN - Carrera de Física',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCPN - Planetario Max Schreier Observatorio Astronómico',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCPN - Carrera de Informática',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCPN - Centro de Estudiantes (Carrera de Informática)',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCPN - Centro de Estudiantes (Carrera de Matemática)',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCPN - Carrera de Matemática',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCEF - Carrera Contaduría Pública',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCEF - Carrera Contaduría Pública - Kardex',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCEF - Carrera Contaduría Pública - Centro de Cómputo',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCEF - Carrera Contaduría Pública - PETAENG',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCEF - Carrera Contaduría Pública - Centro de Estudiantes',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCEF - Carrera Contaduría Pública - Curso de Temporada',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCEF - Carrera Administración de Empresas',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCEF - Carrera Administración de Empresas - Centro de Estudiantes',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCEF - Carrera Administración de Empresas - Kardex',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCEF - Carrera Administración de Empresas - Centro de Cómputo',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCEF - Carrera Administración de Empresas - Sede Provincial Caranavi',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCEF - Carrera Administración de Empresas - Administración Montes',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCEF - Carrera Administración de Empresas - CRU',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCEF - Carrera Administración de Empresas - PETAENG',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCEF - Carrera de Economía',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCEF - Carrera de Economía - Kardex',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCEF - Carrera de Economía - Centro de Cómputo',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCEF - Carrera de Economía - Centro de Estudiantes',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCEF - Carrera de Economía - PETAENG',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FAR - Carr. Química Farmaceútica',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FAR - Carr. Bioquímica',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'MED - Carrera de Medicina',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'MED - Comisión de Auto Evaluación y Acreditación del MERCOSUR',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'MED - Carr. Enfermería',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'MED - Carr. Nutrición y Dietética',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'MED - Carr. Tecnología Médica',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FODT - Carr. Odontología',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'AGR - CIPyCA (Dirección)',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'AGR - Carr. Ingeniería Agronómica',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'AGR - CIPyCA (Administración Viacha)',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'TEC - Centro de Estudiantes - Carr. Elec. y Telecom',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FAADU - Carrera de Arquitectura',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'ARQ - Re Acreditación Arquitectura',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FAADU - Carrera de Artes',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FAADU - Carrera Arquitectura - Centro de Estudiantes',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCG - Carr. Ingeniería Geológica',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCG - Honorable Consejo de Carrera (Carr. Ingeniería Geológica)',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCG - Carr. Ingeniería Geográfica',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FCG - Honorable Consejo de Carrera (Carr. Ingeniería Geográfica)',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'SOC - Carr. Trabajo Social',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'SOC - Carr. Trabajo Social (Unidad de Prácticas)',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'SOC - Carr. Sociología',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'SOC - Carr. Cs. de la Comunicación Social',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'SOC - Carr. Antropología y Arqueología',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FDCP - Carrera de Derecho',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FDCP - Carrera de Derecho - Kardex',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FDCP - Carrera de Derecho - Secretaria Académica',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FDCP - Carrera de Derecho - Sistemas',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FDCP - Carrera de Derecho - Petaeng',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FDCP - Carrera de Derecho - Centro de Estudiantes',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FDCP - Carrera de Ciencias Políticas y Gestión Pública',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FDCP - CCPYGP - Kardex',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FDCP - CCPYGP - Sistemas',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FDCP - CCPYGP - Biblioteca',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FDCP - CCPYGP - Inst. Investigaciones en Ciencia Política (IINCIP)',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FDCP - CCPYGP - Secretaría Académica',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FDCP - CCPYGP - Centro de Estudiantes',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FDCP - CCPYGP - PETAENG',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FHCE- Carr. Ciencias de la Información',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FHCE - Centro de Estudiantes (Carr. Cs. de la Información)',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FHCE- Carr. Ciencias de la Educación',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FHCE - Centro de Estudiantes (Carr. Cs. de la Educación)',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FHCE - Carr. Lingüistica e Idiomas',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FHCE - Centro de Enseñanza y Traducción de Idiomas (CETI)',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FHCE - Prefacultativo Carr. Lingüistica',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FHCE - Carrera de Psicología',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FHCE - Kardex Carr. Psicología',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FHCE - Carera de Psicología - PETAENG',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FHCE - Centro de Estudiantes (Carrera de Psicología)',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FHCE - Prefacultativo Carr. de Psicología',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FHCE - Carrera de Turismo',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FHCE - Centro de Estudiantes (Carr. Turismo)',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FHCE - Prefacutltativo Carr. de Turismo',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FHCE - Carrera de Turismo - PETAENG',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FHCE - Carr. Historia',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'FHCE - Centro de Estudiantes (Carr. Historia)',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'ING - Carrera de Ingeniería Química',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'ING - Carrera de Ingeniería Electrónica',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'ING - Carrera de Ingeniería Eléctrica',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'ING - Carrera de Ingeniería Industrial',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'ING - Carrera de Ingeniería Mecánica',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'ING - Carrera de Ingeniería Petrolera',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'ING - Carrera de Ingeniería Civil',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'ING - Carrera de Ingeniería Metalúrgica',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'ING - Carrera de Ingeniería Mecánica y Electromecánica',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'TEC - Carr. Electrónica y Telecomunicaciones',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'TEC - Carr. Topografía Geodesia',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'TEC - Carr. Electricidad',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'TEC - Carr. Construcciones Civiles',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'TEC - Centro de Estudiantes (Carr. Construcciones Civiles)',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'TEC - Carr. Electromecánica',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'TEC - Carr. Aeronáutica',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'TEC - Carr. Mecánica Automotriz',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'TEC - Carr. Quimica Industrial',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'TEC - Carr. Mecánica Industrial',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),

            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'TEC - Pre-facultativo Central',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'TEC - Pre-facultativo Carrera Mecánica Automotriz ',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'TEC - Pre-facultativo Carrera Electrónica y Telecomunicaciones',
            'area' => 'Carreras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //Facultades

        DB::table('units')->insert([
            'nombre' => 'FAC. CIENCIAS PURAS Y NATURALES (Decanato)',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCPN - Vicedecanato',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCPN - Kardex Facultativo',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCPN - Dirección de Admisión Facultativa',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCPN - Unidad Desconcentrada',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCPN - Unidad Desconcentrada de Infraestructura',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCPN - Curso Pre Universitario',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCPN - Centro de Estudiantes Facultativo',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAC. CS. ECONÓMICAS Y FINANCIERAS (Decanato)',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCEF - Vicedecanato',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCEF - Honorable Consejo Facultativo',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCEF - Unidad Desconcentrada',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCEF - Unidad de Infraestructura',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCEF - Unidad de Sistemas',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCEF - Unidad de Prefacultativo',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCEF - Unidad de Inventarios',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCEF - Unidad Facultativa de Evaluación, Acreditación y Gestión de Calidad',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCEF - Administracion de Bienes y Servicios',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCEF - Centro de Estudiantes Facultativo',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCEF - Comisión de Postgrado Facultativo',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCEF - Comisión del Curso Prefacultativo',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCEF - Asociación de Docentes',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - Maestría en Citología Aplicada: Diag. Diferencial y Molecular del Cáncer',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - Fac. Cs. Farmaceúticas y Bioquímica (HCF)',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAC. CS. FARMACEUTICAS Y BIOQUIMICA (Decanato)',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - Vicedecanato',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - Unidad Desconcentrada',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - UDI',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - CIDME',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - ADBIOFAR',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - Administración',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - Secretario Eje. Carr. Quimica Farm.',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - KARDEX',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - Proyectos IDH',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - Centro Facultativo Sec. Ejec. FCFB',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - Secretario Eje. Carr. Bioquímica Farm.',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - Sociedad Científica',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - Farmacia Institucional',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - Unidad de Sistemas',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - Dpto. de Seguimiento Académico y Gestión de la Calidad',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCFB - Unidad de Ensayos Biológicos - Biotero',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCFB - CURSO PREFACULTATIVO',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAC. MEDICINA (Decanato)',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - FAC. MEDICINA (HCF)',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Vicedecanato',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Unidad Desconcentrada',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Caja',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Departamento de Medicina',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Departamento de Cirugía',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Departamento de Materno Infantil',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Departamento de Patologia',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Departamento de Salud Publica',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Departamento de Cs. Funcionales',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Departamento de Cs. Morfológicas',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Unidad de Biología Celular',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - (Unidad Desconcentrada Infraestructura) UDI',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Oficina Revista Cuadernos',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Inventarios',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Almacenes',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - UMSALUD',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Administración (I.B.B.A.)',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Administración',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Librería OPS/OMS',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Residencia Medica',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Admisión Facultativa',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Carrera de Medicina - Internado Rotatorio',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Asociación Docentes ADMENT',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Comisión Institucional del HCF',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Comisión de Postgrado Facultativa',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Comisión de Infraestructura del HCF',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Comisión deConvenios del HCF',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Comisión Administrativa Financiera del HCF',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Comisión Administrativa Financiera CAF',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAC. ODONTOLOGÍA (Decanato)',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Comisión de Tecnología de Comunicación del HCF',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Comisión de Investigación e Interacción Social del HCF',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FODT - Vicedecanato',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Comité de Ética en la Investigación y Calidad COMETICA',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Prefacultativo',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FODT - Unidad Desconcentrada',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Proyecto TOURO',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Sistema de Adminisión Facultativo S.A.F.',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Centro de Estudiantes Facultativo CEFACMENT',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Unidad del Proceso de Admisión',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Oficina de Educación Médica y Gestión de Calidad',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FODT - ADOFO',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FODT - Unidad Técnica',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FODT - Kardex Facultativo',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FODT - Unidad de Admisión Estudiantil Facultativa',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FODT - Administración Estudiantil Facultativa',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FODT - Unidad de Informática',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FODT - Administración',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FODT - Unidad de Inventarios',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FODT - Unidad de Radiología',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FODT - Unidad de Infraestructura',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FODT - Almacenes',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FODT - Inst. de Investigación y Desarrollo de la Facultad de Odontología IIDFO',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FODT - Comisión de Proceso de Autoeval. Acred. ARCU - SUR',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FODT - Unidad Gestión y Seguimiento de la Calidad',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAC. AGRONOMIA (Decanato)',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Vicedecanato',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - UDAF',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Curso Prefacultativo',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Maestría en Ingeniería de Riegos',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Centro de Estudiantes Facultativo',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Centro de Estudiantes Carr. Agronomia',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Centro de Estudiantes Cipyca',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Implementacion de Riego por aspercion',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Centro Experiemental (cota cota)',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Programa en Ingeniería Agronómica Tropical',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Programa en Medicina Veterinaria y Zootécnia',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Capacitacion',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Programa en Ingeniería Agronómica Forestal',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Estacion Experimental de Choquenaira',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Estación Experimental de Patacamaya',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Sistemas',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Estacion Experimental de Sapecho',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Proyecto Estimación de Estudios Ambientales',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Petaeng',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Administración',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Kardex',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - UDI',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - ADAG Asoc. de Docentes de Agro.',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Unidad de Difusión y Comunicación',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - CRU Patacamaya - SUR Luribay',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Unidad de Gestión y Seguimiento de la Calidad Académica',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAC. ARQUITECTURA Y ARTES (Decanato)',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAADU - Vicedecanato',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAADU - Centro de Recursos Tecnológicos Y Pedagógicos - CRTP',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAADU - Administración',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAADU - Infraestructura',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAADU - Kardex Arquitectura',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAADU - Inventarios',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAADU - Área Desconcentrada',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAADU - Programa de Admisión Facultativa',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAADU - Imprenta y Publicaciones',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAC. CS.GEOLOGICAS (Decanato)',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCG - Vicedecanato',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCG - Área Desconcentrada',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCG - Unidad Desconcentrada de Infraestructura',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCG - Depósito',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCG - Administración de Bienes e Inventarios',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCG - Curso Prefacultativo',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCG - Administración',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCG - Honorable Consejo Facultativo',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCG - Archivo (Decanato)',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCG - Kardex',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCG - Centro de Estudiantes Fac. Ciencias Geológicas',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCG - Unidad de Sistemas',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCG - Centro de Estudiantes Carr. Ingeniería Geológica',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCG - Centro de Estudiantes Carr. Ingeniería Geográfica',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCG - Maestría en Geopolítica de los Recursos Naturales',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCG - Maestria en Teledetección Espacial y Sist. de Información Geográfica Aplicadas a las Ciencias de la Tierra',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCG - Programa Académico Desconcentrado Quime',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCG - Programa Académico Desconcentrado Caranavi',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCG - Programa Académico Desconcentrado Achacachi',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCG - Programa Académico Desconcentrado VIACHA',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAC. CS. SOCIALES (Decanato)',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAC. CS. SOCIALES (HCF)',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'SOC - Vicedecanato',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'SOC - (Unidad Desconcentrada Infraestructura) UDI',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'SOC - Unidad de Área Desconcentrada',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'SOC - Administración',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'SOC - Inventariador Fac. Cs. Sociales',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'SOC - de Admisión Facultativa',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'SOC - Observatorio de Políticas Públicas Sociales',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'SOC - Asociación de Docentes',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'SOC - Centro de Estudiantes Carr. Trabajo Social',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'SOC - Centro de Estudiantes Carr. Cs. Com. Social',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAC. DERECHO Y CS.POLITICAS (Decanato)',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FDCP - Secretaría Académica Facultativa',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FDCP - Vicedecanato',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FDCP - Unidad de Administración Desconcentrada (UAD)',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FDCP - Unidad Desconcentrada de Infraestructura',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FDCP - Unidad de Inventarios',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FDCP - Centro de Estudiantes Facultativo',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FDCP - Unidad de Administración Facultativa',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FDCP - Instituto de Práctica Forense',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FDCP - Dirección de Admisión Facultativa',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Centro de Conciliación Facultativo - FDCP',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'CENTRO INFANTIL UNIVERSITARIO "ISIDORITO"',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Ventanilla Facultativa',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAC. HUM. Y CS. DE LA EDUCACIÓN (Decanato)',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Vicedecanato',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Administración',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Asociación de Docentes',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Área Desconcentrada',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - UDI',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE- Unidad de Sistemas',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Inventarios',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Imprenta',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Círculo Infantil',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Diagnóstico Neuropedagógico',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Coordinación Facultativa',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Unidad de Postgrado',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Autoeval. y Acreditación',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Internacionalización',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Adulto Mayor',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Unidad de Comunicación',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Equinoterapia',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FDCP - Programa Derecho de las Naciones Originarias',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FDCP - TIC Facultativo',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAC. INGENIERIA (Decanato)',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FDCP - Maestría en Educación Superior con Enfoque Intercultural Jurídico y Político',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FDCP - Asociación de Docentes',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FDCP - Unidad de Gestión de Planif. y Seguimiento de la Calidad',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'ING - Vicedecanato',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'ING - Unidad Desconcentrada',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'ING - Cursos Básicos',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Instituto de Investigación, Interacción y Postgrado de Psicología',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'ING - Unidad de Sistemas',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Archivo La Paz',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAC. DE TECNOLOGIA (Decanato)',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'TEC - Centro de Estudiantes Facultativa',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'TEC - Asociación Docentes (ADOFATEC)',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'TEC - Vicedecanato',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'TEC - Unidad Desconcentrada',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'TEC - (Unidad Desconcentrada Infraestructura) UDI',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'TEC - Kardex',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'ING - Instituto de Ingeniería Sanitaria Ambiental',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'TEC - Dirección y Coordinación',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'TEC - Dpto. de Materias Básicas',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'TEC - Adminisración (Potosí)',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'TEC - Administración (Arce)',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'TEC - Curso de Temporada',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'TEC - Dpto. de Computación',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'TEC - Sede Provincial Achacachi',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'ING - Organización de Estudiantes de Ingeniería',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'TEC - Sede Provincial Colquencha',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'TEC - Sede Provincial Irupana',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'TEC - LABOTECC',
            'area' => 'Facultades',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //Institucion externa

        DB::table('units')->insert([
            'nombre' => 'Instituciones Externas a la UMSA',
            'area' => 'Institucion externa',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //INSTITUTOS

        DB::table('units')->insert([
            'nombre' => 'FCPN - Instituto de Biología Herbario',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCPN - Instituto de investigaciones Físicas',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCPN - Instituto de Investigaciones de Informática',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCPN - Instituto de Investigaciones Químicas',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'IIQ - Laboratorio de Resonancia Magnética Nuclear',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'IIQ - Laboratorio de Análisis de Química Ambiental',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'IIQ - Laboratorio de Análisis de Alimentos',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'IIQ - Laboratorio de Cromatografía de Gases',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'IIQ - Laboratorio Nro. 1 Servicio de Análisis',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'IIQ - Laboratorio de Servicio de Química de Materiales, Catálisis y Petroquímica',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCPN - Instituto de Investigaciones de Calidad Ambiental',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCPN - Instituto de Ecología',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCPN - Instituto de Biología Molecular y Biotecnología',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCPN - Instituto de Estadística Teórica y Aplicada',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCPN - Jardín Botánico',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCEF - (IICCFA) Inst. en Inv. en Cs. Contables, Financieras y Auditoria',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCEF - IICCA',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCEF - Instituto de Investigaciones Económicas',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - SELADIS - Servicio de Laboratorio y Diagnóstico',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - SELADIS - Servicio de Laboratorio y Diagnóstico - Zona Central',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - SELADIS - Servicio de Laboratorio y Diagnóstico - Zona Sur',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - SELADIS - Laboratorio de Virología',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - SELADIS - Laboratorio de Biomedicina Experimental',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - SELADIS - Laboratorio Histocompatibilidad',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - SELADIS - Laboratorio de Genética Molecular',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - SELADIS - Laboratorio de Bromatología',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - SELADIS - Laboratorio de Microbiología Molecular',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - SELADIS - Control de Calidad de Medicamentos y Cosméticos',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - SELADIS - Laboratorio de Biodisponibilidad y Bioequivalencia',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - SELADIS - Laboratorio de Endocrinologia',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - SELADIS - Laboratorio de Bacteriología',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - SELADIS - Laboratorio de Microbiología de Alimentos',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - SELADIS - Laboratorio de Química Clínica',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - SELADIS - Laboratorio de Hematología',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - SELADIS - Laboratorio de Parasitología',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - SELADIS - Laboratorio de Inmunología',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - SELADIS - Laboratorio de Citología',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - SELADIS - Unidad de Sistemas',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - SELADIS - Trabajo Social',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - SELADIS - AdminIstración',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - SELADIS - Asesoria Legal',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - SELADIS - Cajas',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - Inst. de Inv. Farmaco y Bioquímica (IIFB)',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Instituto de Genética',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Instituto de Genética',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Inst. de Inv. En Salud y Desarrollo - IINSAD',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Instituto Boliviano de Biología de Altura I.B.B.A.',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Instituto de Inv. Agropecuarias y Recursos Naturales',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAADU - Instituto de Investigación y Postgrado',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCG - Instituto de Investigaciones Geológicas',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCG - Instituto de Investigaciones Geográficas',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'SOC - Instituto de Invs. Antropológicas y Arqueológicas',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'SOC - Instituto de Investigaciones Sociológicas',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'SOC - Instituto IPICOM',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FDCP - Instituto de Investigaciones, Seminarios y Tesis',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FDCP - Instituto de Seminario derecho',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Inst. de Investigaciones de Psicología',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Inst. de Inv., Consultoria y Serv. Turísticos - IICSTUR',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Inst. de Inv. , Postgrado e Interacción Social IIPIST',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Emprendimiento de Inf. y Serv. Turísticos - EMISTUR',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Instituto de Estudios Bolivianos (IEB)',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Inst. de Investigaciones Históricas',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'ING - Instituto de Investigaciones Amazónicas',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'ING - Instituto de Electrónica Aplicada',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'ING - Instituto de Investigaciones Industriales',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'ING - Instituto de Investigaciones Mecánicas',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'ING - Instituto de Investigaciones Metalúrgicas y de Materiales',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'ING - Instituto de Ensayo de Materiales',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'ING - Instituto de Hidráulica e Hidrología',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'ING - Instituto de Investigación y Desarrollo de Procesos Químicos',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'ING - Instituto INUISISO',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'ING - Postgrado Ingeniería Sanitara',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'ING - Instituto de Transporte y Vías de Comunicación',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'ING - Postgrado en Gestión Sost. Recursos Hídricos',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'TEC - Instituto de Inv., Producción y Asistencia Técnica',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'TEC - Instituto de Inv. y Aplicaciones Tecnológicas',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'TEC - Instituto de Inv. y Aplicaciones Geomáticas',
            'area' => 'Institutos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //PROYECTOS

        DB::table('units')->insert([
            'nombre' => 'AGR - ProyectoIllimani',
            'area' => 'Proyectos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Proyecto Forrajes',
            'area' => 'Proyectos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Proyecto Fontagro',
            'area' => 'Proyectos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Proyecto Andescrop',
            'area' => 'Proyectos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Proyecto Quinagua',
            'area' => 'Proyectos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Proyecto OTB "La Algarrobilla"',
            'area' => 'Proyectos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Proyectos IDH',
            'area' => 'Proyectos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Proyecto CBA - Batallas',
            'area' => 'Proyectos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Proyecto Presas Sub Terraneas',
            'area' => 'Proyectos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Proyecto Cultivos Andinos',
            'area' => 'Proyectos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Proyecto la Universidad con las comunidades rurales',
            'area' => 'Proyectos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Proyecto Fisar',
            'area' => 'Proyectos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Proyecto Megeovit',
            'area' => 'Proyectos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Proyecto Crianza de Cuyes',
            'area' => 'Proyectos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Proyecto de Pucarani',
            'area' => 'Proyectos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'TEC - Proyecto Aceites',
            'area' => 'Proyectos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //UNIDAD DE PROSGRADO

        DB::table('units')->insert([
            'nombre' => 'FCPN - Postgrado Ecología y Conservación',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCPN - Postgrado Informática',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCPN - Postgrado Matemática',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCEF - Carrera Contaduría Pública - Unidad de Postgrado',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCEF - Carrera Administración de Empresas - Unidad de Postgrado',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCEF - Postgrado Auditoria',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCEF - Postgrado Economía',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAR - Postgrado Bioquímica',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Unidad de Postgrado',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'MED - Postgrado Nutrición',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FODT - Postgrado',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'AGR - Postgrado Agronomía',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FAADU - Postgrado Arquitectura',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCG - Postgrado Carrera Ingeniería Geográfica ',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FCG - Postgrado Cs. Geológicas',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'SOC - Postgrado IPICOM',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FDCP - Postgrado y Relaciones Internacionales',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FDCP - Área de Ciencias Políticas (UPRI)',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FDCP - Área Financiera (UPRI)',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FDCP - Área Kardex (UPRI)',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FDCP - Área Secretaria Académica (UPRI)',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FDCP - Área Sistemas (UPRI)',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FDCP - Área de Derecho (UPRI)',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Postgrado de Ciencias de la Educación',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'FHCE - Postgrado de Psicología',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'ING - Postgrado en Redes de Comunicación',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'ING - Postgrado Estructuras',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'ING - Postgrado Ingeniería Industrial',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'ING - Postgrado IQPAA',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'TEC - UNIDAD DE POSTGRADO',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'TEC - Coordinación del Programa de Maestría',
            'area' => 'Unidad de posgrado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //UNIDAD EXTERNA

        DB::table('units')->insert([
            'nombre' => ' Instituto de Desarrollo Regional',
            'area' => 'Unidad externa',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'nombre' => 'TInst. de Desarrollo Regional y Desconcentración Universitaria IDR-DU (Administración)',
            'area' => 'Unidad externa',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //EXTERNO CENTRAL

        DB::table('units')->insert([
            'nombre' => 'Administración Central',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Almacén Central',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Caja Monoblock central',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Centro Infantil Universitario Andresito',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'CEPIES',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Comisión Administrativa Financiera - HCU',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Comisión Bienestar Social del HCU',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Comisión de Cultura del HCU',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Comisión de Infraestructura del HCU',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Comisión de Saneamiento Tec. Legal de Propiedades Universitarios',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Consejo Académico Universitario - CAU',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Defensoría Universitaria',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'DIRECCION ADMINISTRATIVA FINANCIERA',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Div. de Acciones y Control',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Div. de Adquisiciones',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Div. de Biblioteca Central',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Div. de Bienes e Inventarios',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Div. de Culturas y Artes',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Div. de Desarrollo de RRHH',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Div. de Desarrollo de Talento Humano',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Div. de Documentos y Archivo',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Div. de Escalafón y Curriculum Docente',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Div. de Estratégias Comunicacionales',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Div. de Gestiones, Admisiones y Registros',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Div. de Remuneraciones Administrativas',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Div. de Salud',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Div. de Títulos y Diplomas',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Div. de Trabajo Social',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'División de Apoyo al Norte Amazónico (DANA)',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'División de Evaluación, Acreditación y Gestión de Calidad',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Dpto. de Asesoria Juridica',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Dpto. de Auditoria Interna',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Dpto. de Bienestar Social',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Dpto. de Contabilidad',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Dpto. de Información y Comunicación',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Dpto. de Infraestructura',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Dpto. de Investigación Postgrado e Interacción Social (DIPGIS)',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Dpto. de Personal Docente',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Dpto. de Planificación, Evaluación y Acreditación (DPEC)',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Dpto. de Presupuesto y Planificación Financiera',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Dpto. de Recursos Humanos Administrativos',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Dpto. de Relaciones Internacionales',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Dpto. de Tecnologías de Información y Comunicación (DTIC)',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Dpto. de Tesoro Universitario',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Fed. Sind. de Docentes de la UMSA (FEDSIDUMSA)',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Federación Universitaria Local (FUL)',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Gestoría - Departamento Tesoro Universitario',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Imprenta Universitaria',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Inst. de Desarrollo Regional y Desconcentración Universitaria (IDR-DU)',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Programa de Cine y Producción Audiovisual',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Programa Permanente de Capacitación Administrativa - PPCAD',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Radio San Andrés',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'RECTORADO',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Sección de Deportes',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Sección Técnica de Operaciones Tributarias',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Secretaria Academica',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'SECRETARIA GENERAL',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Seguro Social Universitario - SSU',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Sind. de Trabajadores de la UMSA (STUMSA)',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Televisión Universitaria',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Tribunal de Garantias Electorales',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Tribunal de Procesos Universitarios',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'UMSA Solidaria',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Unidad de Transparencia',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Unidad de Transporte',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'VICERRECTORADO',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'CEPIES - Coordinación de Doctorado y Postdoctorado',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'CEPIES - Area Desconcentrada',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'CEPIES - Unidad de Sistemas',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'CEPIES - Biblioteca',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'CEPIES - Procuraduría',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'CEPIES - METSIBO',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Sind. de Trabajadores de la UMSA (STUMSA)',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Consejo Académico Universitario - CAU',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'SECRETARIA GENERAL',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Div. de Títulos y Diplomas',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Div. de Documentos y Archivo',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Div. de Desarrollo de Talento Humano',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Imprenta Universitaria',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Div. de Culturas y Artes',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Div. de Estratégias Comunicacionales',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Tribunal de Procesos Universitarios',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Tribunal de Garantias Electorales',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Administración Central',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'DIRECCION ADMINISTRATIVA FINANCIERA',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Comisión Administrativa Financiera - HCU',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Dpto. de Presupuesto y Planificación Financiera',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Dpto. de Tesoro Universitario',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Caja Monoblock central',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Gestoría - Departamento Tesoro Universitario',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Sección Técnica de Operaciones Tributarias',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Dpto. de Contabilidad',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Archivo Contable',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Div. de Adquisiciones',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Almacén Central',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Div. de Bienes e Inventarios',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Dpto. de Recursos Humanos Administrativos',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Div. de Desarrollo de RRHH',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Div. de Acciones y Control',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Div. de Remuneraciones Administrativas',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Programa Permanente de Capacitación Administrativa - PPCAD',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Dpto. de Infraestructura',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Unidad de Transporte',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Área Desconcentrada de la Administración Central ADC',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Federación Universitaria Local (FUL)',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('units')->insert([
            'nombre' => 'Federación Universitaria Local - HCU',
            'area' => 'Externo central',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
