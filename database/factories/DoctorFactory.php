<?php

namespace Database\Factories;

use App\Models\DoctorDepartment;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    protected $model = \App\Models\Doctor::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'doctor_department_id' => DoctorDepartment::factory(),
            'specialist' => $this->faker->randomElement(['Cardiologist', 'Neurologist', 'General Physician']),
            'description' => $this->faker->paragraph,
            'appointment_charge' => $this->faker->randomFloat(2, 50, 500)
        ];
    }
}
