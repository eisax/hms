<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorDepartmentFactory extends Factory
{
    protected $model = \App\Models\DoctorDepartment::class;

    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'description' => $this->faker->sentence
        ];
    }
}