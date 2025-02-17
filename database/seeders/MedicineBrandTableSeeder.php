<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class MedicineBrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $input = [
            [
                'name' => 'Atcuron',
            ],
            [
                'name' => 'Benadryl',
            ],
            [
                'name' => 'Calbeta',
            ],
            [
                'name' => 'Supradyn',
            ],
            [
                'name' => 'Tolol-H',
            ],
            [
                'name' => 'Omeprol',
            ],
            [
                'name' => 'Lisinopress',
            ],
            [
                'name' => 'Amlodipine',
            ],
            [
                'name' => 'Metformax',
            ],
            [
                'name' => 'Cetirizin',
            ],
            [
                'name' => 'Pantoprazol',
            ],
        ];

        foreach ($input as $data) {
            Brand::create($data);
        }
    }
}
