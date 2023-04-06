<?php

namespace Database\Factories;

use App\Models\direccionmodel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\direccionmodel>
 */
class direccionesmodelFactory extends Factory
{
    protected $model = direccionmodel::class;
    public function definition()
    {
        return [
            'alumno_id' => function () {
                return factory(alumnomodelFactory::class)->create()->id;
            },
            'street' => $this->faker->street,
            'city' => $this->faker->city,
            'country' =>  $this->faker->country,
            'postal_code' =>  $this->faker->postal_code,
        ];
    }
}
