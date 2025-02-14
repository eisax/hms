<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class MedicineCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $input = [
            [
                'name' => 'Antipyretics',
                'is_active' => 1,
            ],
            [
                'name' => 'Analgesics',
                'is_active' => 1,
            ],
            [
                'name' => 'Antimalarial',
                'is_active' => 1,
            ],
            [
                'name' => 'Antibiotics',
                'is_active' => 1,
            ],
            [
                'name' => 'Antiseptics',
                'is_active' => 1,
            ],
            [
                'name' => 'Antihistamines',
                'is_active' => 1,
            ],
            [
                'name' => 'Antacids',
                'is_active' => 1,
            ],
            [
                'name' => 'Diuretics',
                'is_active' => 1,
            ],
            [
                'name' => 'Antidepressants',
                'is_active' => 1,
            ],
            [
                'name' => 'Anticoagulants',
                'is_active' => 1,
            ],
            [
                'name' => 'Antidiabetics',
                'is_active' => 1,
            ],
            [
                'name' => 'Corticosteroids',
                'is_active' => 1,
            ],
            [
                'name' => 'Antifungals',
                'is_active' => 1,
            ],
            [
                'name' => 'Antispasmodics',
                'is_active' => 1,
            ],
            [
                'name' => 'Antivirals',
                'is_active' => 1,
            ],
        ];

        foreach ($input as $data) {
            Category::create($data);
        }
    }
}
