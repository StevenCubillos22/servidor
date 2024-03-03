<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tareas')->insert([
            'nombre'=>'Quimica',
            'descripcion'=>'Estudiar para examen final'
        ]);

        DB::table('tareas')->insert([
            'nombre'=>'Lengua',
            'descripcion'=>'Terminar seis analisis morfologicos'
        ]); 

        DB::table('tareas')->insert([
            'nombre'=>'Perro',
            'descripcion'=>'Sacar a pasear al perro'
        ]);

        DB::table('tareas')->insert([
            'nombre'=>'Cumpleaños',
            'descripcion'=>'Darle regalo a mi amigo en casa'
        ]);

    }
}
