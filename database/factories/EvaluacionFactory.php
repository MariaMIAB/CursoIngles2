<?php

namespace Database\Factories;

use App\Models\Evaluacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvaluacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Evaluacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name(),
            'tipoexamen'=> $this->faker->randomElement(['Cuestionario','seleccion','Falso Verdadero']),
            'tema_id'=> $this->faker->numberBetween(1,50),
            'nota_id'=> $this->faker->numberBetween(1,50),
        ];
    }
}
