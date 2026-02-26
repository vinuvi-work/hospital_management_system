<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appoinment>
 */
class AppoinmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>fake()->name(),
            'nic' =>fake()->unique()->randomElement([
                fake()->numerify('#########V'),
                fake()->numerify('############')
            ]),
            'email' =>fake()->unique()->safeEmail(),
            'phone_number' =>fake()->unique()->numerify('07########'),
            'age' =>fake()->numberBetween(0,100),
            'gender' =>fake()->randomElement(['Male', 'Female']),
            'specialization' =>fake()->randomElement(['Cardiology', 'Endocrinology', 'Gastroenterology', 'Hematology', 'Neurology']),
            'doc_name' =>fake()->name(),
            'date' =>fake()->date(),
            'time' =>fake()->time()
            
        ];
    }
}
