<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
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
            'nic'  =>fake()->unique()->randomElement([
                fake()->numerify('#########V'),
                fake()->numerify('############'),
            ]),
            'email' =>fake()->unique()->safeEmail(),
            'password' =>Hash::make('password'),
            'phone_number' => fake()->numerify('07########'),
             'age' =>fake()->numberBetween(1,100),
             'gender' =>fake()->randomElement(['Male','Female']),
             'blood_type' =>fake()->randomElement(['A+','A-','O+','O-','AB+', 'AB-']),
             'health_history' =>fake()->sentence()
        ];
    }
}
