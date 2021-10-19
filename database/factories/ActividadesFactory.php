<?php

namespace Database\Factories;

use App\Models\Actividades;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActividadesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Actividades::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_actividad'=>$this->faker->sentence(),
            'fechaini'=>$this->faker->randomElement(['2021-11-12 18:34:07','2021-12-6 18:34:07']),
            'fechapresent'=>$this->faker->randomElement(['2021-09-10 18:34:07','2021-02-4 18:34:07']),
            'tema_id'=> $this->faker->numberBetween(1,50),
        ];
    }
}
