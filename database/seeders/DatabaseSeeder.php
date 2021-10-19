<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RolSeeder::class);
        $this->call(NotasSeeder::class);
        $this->call(CronogramaSeeder::class);
        $this->call(MateriaSeeder::class);
        $this->call(TemaSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(AsistenciaSeeder::class);
        $this->call(ActividadesSeeder::class);
        $this->call(EvaluacionSeeder::class);
    }
}
