<?php

namespace Database\Factories;

use App\Models\Notas;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Notas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nota1'=>$this->faker->numberBetween(1,100),
            'nota2'=>$this->faker->numberBetween(1,100),
            'nota3'=>$this->faker->numberBetween(1,100),
            'notafinal'=>$this->faker->numberBetween(1,100),
        ];
    }
}
