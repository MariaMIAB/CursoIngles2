<?php

namespace Database\Seeders;

use App\Models\Evaluacion;
use Illuminate\Database\Seeder;

class EvaluacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evaluacion::factory(50)->create();
    }
}
