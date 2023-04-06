<?php

namespace Database\Factories;

use App\Models\alumnomodel;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\alumnomodel>
 */
class alumnomodelFactory extends Factory
{
    protected $model = alumnomodel::class;

    public function definition()
    {

        $email = $this->faker->unique()->safeEmail;
        return [
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'age' => $this->faker->numberBetween(1, 65),
            'password' => bcrypt('password'),
            'mail' => $email,
            'genre' => $this->faker->randomElement(['M', 'F']),
        ];
    }
}
