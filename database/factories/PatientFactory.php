<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    protected $model = \App\Models\Patient::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'patient_unique_id' => 'P'.str_pad($this->faker->unique()->numberBetween(1, 99999), 5, '0', STR_PAD_LEFT),
        ];
    }
}