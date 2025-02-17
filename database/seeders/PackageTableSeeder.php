<?php

namespace Database\Seeders;

use App\Repositories\PackageRepository;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $input = [
            [
                'name' => 'Basic Checkup Package',
                'discount' => 10,
                'total_amount' => 70,
                'service_id' => [
                    0 => 1,  // General Consultation
                    1 => 2,  // Basic Blood Test
                ],
                'quantity' => [
                    0 => 1,
                    1 => 1,
                ],
                'rate' => [
                    0 => 50,
                    1 => 30,
                ],
            ],
            [
                'name' => 'Advanced Diagnostic Package',
                'discount' => 20,
                'total_amount' => 1140,
                'service_id' => [
                    0 => 3,  // X-Ray
                    1 => 4,  // MRI Scan
                ],
                'quantity' => [
                    0 => 1,
                    1 => 1,
                ],
                'rate' => [
                    0 => 600,
                    1 => 700,
                ],
            ],
            [
                'name' => 'Comprehensive Wellness Package',
                'discount' => 150,
                'total_amount' => 1350,
                'service_id' => [
                    0 => 5,  // Full Body Checkup
                    1 => 6,  // Dental Checkup
                    2 => 7,  // Eye Exam
                ],
                'quantity' => [
                    0 => 1,
                    1 => 1,
                    2 => 1,
                ],
                'rate' => [
                    0 => 800,
                    1 => 300,
                    2 => 400,
                ],
            ],
            [
                'name' => 'Chronic Care Package',
                'discount' => 200,
                'total_amount' => 1800,
                'service_id' => [
                    0 => 8,  // Diabetes Monitoring
                    1 => 9,  // Cardiac Screening
                    2 => 10, // Physical Therapy
                ],
                'quantity' => [
                    0 => 4,
                    1 => 2,
                    2 => 3,
                ],
                'rate' => [
                    0 => 200,
                    1 => 400,
                    2 => 300,
                ],
            ],
            [
                'name' => 'Diabetes Management Plan',
                'discount' => 200,
                'total_amount' => 1800,
                'service_id' => [
                    0 => 6,
                    1 => 7,
                    2 => 8,
                ],
                'quantity' => [
                    0 => 4,   // Quarterly checkups
                    1 => 12,  // Monthly blood sugar tests
                    2 => 1,   // Nutritionist consultation
                ],
                'rate' => [
                    0 => 300,  // Endocrinologist visit
                    1 => 50,   // Glucose test
                    2 => 400,  // Diet planning
                ],
            ],
            [
                'name' => 'Maternity Care Bundle',
                'discount' => 300,
                'total_amount' => 2700,
                'service_id' => [
                    0 => 8,
                    1 => 9,
                    2 => 10,
                ],
                'quantity' => [
                    0 => 5,  // Prenatal visits
                    1 => 3,  // Ultrasounds
                    2 => 1,  // Delivery planning
                ],
                'rate' => [
                    0 => 200,  // OB/GYN consultation
                    1 => 500,  // Ultrasound session
                    2 => 800,  // Birth preparation
                ],
            ],
        ];

        foreach ($input as $key => $value) {
            /** @var PackageRepository $package */
            $package = App::make(PackageRepository::class);
            $package->store($input[$key]);
        }
    }
}
