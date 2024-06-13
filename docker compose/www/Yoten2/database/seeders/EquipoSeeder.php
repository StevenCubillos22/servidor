<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('equipo')->insert([
            'Img' => 'img/equipo1.jpg',
            'Nombre' => 'Equipo A',
            'Descripcion' => 'Descripción del equipo A',
        ]);

        DB::table('equipo')->insert([
            'Img' => 'img/equipo3.jpg',
            'Nombre' => 'Equipo C',
            'Descripcion' => 'Descripción del equipo C',
        ]);

        DB::table('equipo')->insert([
            'Img' => 'img/equipo4.jpg',
            'Nombre' => 'Equipo D',
            'Descripcion' => 'Descripción del equipo D',
        ]);


    }
}
