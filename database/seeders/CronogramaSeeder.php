<?php

namespace Database\Seeders;

use App\Models\Cronograma;
use Illuminate\Database\Seeder;

class CronogramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cronograma::factory(50)->create();
    }
}
