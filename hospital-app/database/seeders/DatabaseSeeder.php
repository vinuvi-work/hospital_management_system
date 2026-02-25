<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Doctor;
use App\Models\Patient;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Doctor::factory(10)->create();
        Patient::factory(10)->create();

        User::factory()->create([
            'name' => 'admin user',
            'email' => 'admin@gmail.com',
            'password' => '1234'
        ]);
    }
}
