<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Perro;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perro>
 */
class PerroFactory extends Factory
{

    protected $model = Perro::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'perr_nombre' => $this->faker->name,
            'perr_imagen' => $this->faker->imageUrl(640, 480,'dogs','png'),
            'descripcion' => $this->faker->sentence
            //
        ];
    }
}
