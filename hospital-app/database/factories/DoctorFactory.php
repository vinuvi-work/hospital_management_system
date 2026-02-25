<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'nic' => fake()->unique()->randomElement([
                fake()->numerify('#########V'),
                fake()->numerify('############')
            ]),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('password'),
            'birth_day' =>fake()->date(),
            'gender' =>fake()->randomElement(['Male', 'Female']),
            'specialization' =>fake()->randomElement(['Cardiology', 'Endocrinology', 'Gastroenterology', 'Hematology', 'Neurology']),
            'qualification' =>fake()->sentence(),
            'expereince' =>fake()->sentence()
             
            
        ];
    }
}
