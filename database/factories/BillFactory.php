<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BillFactory extends Factory
{
    protected $model = \App\Models\Bill::class;

    public function definition()
    {
        return [
            'patient_id' => \App\Models\Patient::factory(),
            'bill_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'amount' => $this->faker->randomFloat(2, 100, 5000),
            'status' => 1
        ];
    }
}