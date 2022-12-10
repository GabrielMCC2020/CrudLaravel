<?php

namespace Database\Factories;

use App\Models\Socio;
use Illuminate\Database\Eloquent\Factories\Factory;

class SocioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Socio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombres' => $this->faker->sentence(),
            'apellidos' => $this->faker->sentence(),
            'direction' => $this->faker->sentence(),
            'edad' => '923132331',
            'estado' => $this->faker->sentence(),
            'dni' => $this->faker->sentence(),
            'celular' => $this->faker->sentence(),
            'genero' => $this->faker->sentence()
        ];
    }
}
