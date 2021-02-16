<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class alumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->insert([
            'nombre' => 'Melania',
            'apellidos' => 'Gallego Otero',
            'dni' => '48977546R'
        ]);
        
        DB::table('alumnos')->insert([
            'nombre' => 'Alberto',
            'apellidos' => 'Cabot Garcia',
            'dni' => '45163875T'
        ]);
        
        DB::table('alumnos')->insert([
            'nombre' => 'Marco' ,
            'apellidos' => 'Otero Orellano',
            'dni' => '46795832L'
        ]);
    }
}
