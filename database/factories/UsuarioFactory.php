<?php

namespace Database\Factories;

use App\Models\Usuario;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;


class UsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [

        'name'=> $this->faker->name(),
        'email' => $this->faker->unique()->safeEmail(),
        'genero'=> $this->faker->randomElement(['Masculino','Femenino']),
        'curso'=> $this->faker->randomElement(['2do A','2do B']),
        'rol_id'=> $this->faker->numberBetween(1,2),
    ];
       
    }
  
 
}
