<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientDiagnosisTestFactory extends Factory
{
    protected $model = \App\Models\PatientDiagnosisTest::class;

    public function definition()
    {
        return [
            'patient_id' => \App\Models\Patient::factory(),
            'doctor_id' => \App\Models\Doctor::factory(),
            'category_id' => \App\Models\DiagnosisCategory::factory(),
            'report_number' => 'RPT-'.$this->faker->unique()->numberBetween(1000, 9999),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now')
        ];
    }
}