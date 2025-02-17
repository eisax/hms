<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $input = [
            [
                'name' => 'X-Ray (Chest)',
                'quantity' => 1,
                'rate' => 4500,
                'status' => 1,
            ],
            [
                'name' => 'Complete Blood Count',
                'quantity' => 1,
                'rate' => 1500,
                'status' => 1,
            ],
            [
                'name' => 'MRI Scan',
                'quantity' => 1,
                'rate' => 25000,
                'status' => 1,
            ],
            [
                'name' => 'Physiotherapy Session',
                'quantity' => 5,
                'rate' => 2000,
                'status' => 1,
            ],
            [
                'name' => 'ECG Test',
                'quantity' => 1,
                'rate' => 3000,
                'status' => 0,
            ],
            [
                'name' => 'Ultrasound (Abdomen)',
                'quantity' => 1,
                'rate' => 6000,
                'status' => 1,
            ],
            [
                'name' => 'Dental Cleaning',
                'quantity' => 1,
                'rate' => 3500,
                'status' => 1,
            ],
            [
                'name' => 'Emergency Room Fee',
                'quantity' => 1,
                'rate' => 10000,
                'status' => 1,
            ],
            [
                'name' => 'Vaccination (Flu Shot)',
                'quantity' => 1,
                'rate' => 1200,
                'status' => 1,
            ],
            [
                'name' => 'CT Scan',
                'quantity' => 1,
                'rate' => 18000,
                'status' => 1,
            ]
        ];

        foreach ($input as $data) {
            Service::create($data);
        }
    }
}
