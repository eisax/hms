<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory
{
    protected $model = \App\Models\Appointment::class;

    public function definition()
    {
        return [
            'patient_id' => \App\Models\Patient::factory(),
            'doctor_id' => \App\Models\Doctor::factory(),
            'department_id' => \App\Models\Department::factory(),
            'opd_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'status' => 1
        ];
    }
}