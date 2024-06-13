<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB; 
use Illuminate\Database\Seeder;

class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('actividad_nocturna')->insert([
            // 'idActividad' => 1
            'titulo' => 'Visita a delfines',
            'precio' => '20.00',
            'ubicacion' => 'Sendai',
        ]);


        DB::table('actividad_nocturna')->insert([
            // 'idActividad' => 2,
            'titulo' => 'Acampada sur de Japón',
            'precio' => '15.00',
            'ubicacion' => 'Playa Bonita',
        ]);


        DB::table('actividad_nocturna')->insert([
            // 'idActividad' => 3,
            'titulo' => 'Universal Japon',
            'precio' => '45.00',
            'ubicacion' => 'Tokio',
        ]);


        DB::table('actividad_nocturna')->insert([
            'titulo' => 'Torre de Tokio',
            'precio' => '19.00',
            'ubicacion' => 'Tokio',
        ]);


        
    }
}
