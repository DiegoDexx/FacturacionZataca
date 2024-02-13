<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('usuarios')->insert([
            [
            'nombre' => 'Josesito',
            'contraseña' => 'nullnull',
            'rol'=>'CEO',
            ],
          [
            'nombre' => 'Izan',
            'contraseña' => 'nullnull',
            'rol'=>'administracion',
         ],
           

        ]
        
        );
    }
    
}
