<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rols')->insert([
            [
                'name' => 'Profesor',
                'descripcion' => 'Persona que tiene por oficio enseñar ',
            ],
            [
                'name' => 'Estudiante',
                'descripcion' => 'Persona que cursa estudios en un centro academico ',
            ],


        ]);
    }
}
