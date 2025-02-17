<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MedicineFactory extends Factory
{
    protected $model = \App\Models\Medicine::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word.' '.$this->faker->randomElement(['Tablet', 'Syrup', 'Injection']),
            'category_id' => \App\Models\Category::factory(),
            'available_quantity' => $this->faker->numberBetween(0, 100),
            'selling_price' => $this->faker->randomFloat(2, 10, 500),
            'buying_price' => $this->faker->randomFloat(2, 5, 250),
            'minimum_quantity' => 10,
            'salt_composition' => $this->faker->word
        ];
    }
}