<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PrescriptionFactory extends Factory
{
    protected $model = \App\Models\Prescription::class;

    public function definition()
    {
        return [
            'patient_id' => \App\Models\Patient::factory(),
            'doctor_id' => \App\Models\Doctor::factory(),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now')
        ];
    }
}