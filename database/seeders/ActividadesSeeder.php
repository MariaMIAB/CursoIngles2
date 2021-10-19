<?php

namespace Database\Seeders;

use App\Models\Actividades;
use Illuminate\Database\Seeder;

class ActividadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Actividades::factory(50)->create();
    }
}
