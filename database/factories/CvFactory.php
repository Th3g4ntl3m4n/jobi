<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cv>
 */
class CvFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $user_id= auth()->id();

        return [

            'user_id' => $this->faker->buildingNumber,
            'phone' => $this->faker->phoneNumber,
            'ciudad' => $this->faker->city,
            'DniNumber' => $this->faker->ean13,
        ];
    }
}
