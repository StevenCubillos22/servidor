<?php


namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class ProductoSeeder extends Seeder {

    public function run(): void {
        DB::table('productos')->insert([
            'nombre'=>'leche',
            'descripcion'=>'tiene lactosa'
        ]);

        DB::table('productos')->insert([
            'nombre'=>'sal',
            'descripcion'=>'la sal es de Almeria'
        ]);

        DB::table('productos')->insert([
            'nombre'=>'carne',
            'descripcion'=>'la carne es ecologica'
        ]);
    }
}