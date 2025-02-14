<?php

namespace Database\Seeders;

use App\Repositories\InsuranceRepository;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class InsuranceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $input = [
            [
                'name' => 'Senior Citizen Health Insurance',
                'service_tax' => 10,
                'insurance_no' => 'INS-1',
                'insurance_code' => 'INSC-1',
                'hospital_rate' => 1000,
                'status' => 1,
                'total' => 1410,
                'disease_name' => [
                    0 => 'Heart Disease',
                    1 => 'Infectious Diseases',
                ],
                'disease_charge' => [
                    0 => 100,
                    1 => 300,
                ],
            ],
            [
                'name' => 'Critical Illness Insurance',
                'service_tax' => 20,
                'insurance_no' => 'INS-2',
                'insurance_code' => 'INSC-2',
                'hospital_rate' => 1000,
                'status' => 1,
                'total' => 1620,
                'disease_name' => [
                    0 => 'Liver Disease',
                    1 => 'Celiac Disease',
                ],
                'disease_charge' => [
                    0 => 200,
                    1 => 400,
                ],
            ],
            [
                'name' => 'Maternity Care Insurance',
                'service_tax' => 15,
                'insurance_no' => 'INS-3',
                'insurance_code' => 'INSC-3',
                'hospital_rate' => 2000,
                'status' => 1,
                'total' => 4600,
                'disease_name' => [
                    0 => 'Prenatal Care',
                    1 => 'Delivery Complications',
                ],
                'disease_charge' => [
                    0 => 500,
                    1 => 1500,
                ],
            ],
            [
                'name' => 'Pediatric Health Insurance',
                'service_tax' => 12,
                'insurance_no' => 'INS-4',
                'insurance_code' => 'INSC-4',
                'hospital_rate' => 1500,
                'status' => 1,
                'total' => 3024,
                'disease_name' => [
                    0 => 'Childhood Vaccinations',
                    1 => 'Pediatric Asthma',
                ],
                'disease_charge' => [
                    0 => 200,
                    1 => 1000,
                ],
            ],
            [
                'name' => 'Mental Health Coverage',
                'service_tax' => 18,
                'insurance_no' => 'INS-5',
                'insurance_code' => 'INSC-5',
                'hospital_rate' => 1800,
                'status' => 1,
                'total' => 4488,
                'disease_name' => [
                    0 => 'Clinical Depression',
                    1 => 'Anxiety Disorders',
                ],
                'disease_charge' => [
                    0 => 700,
                    1 => 900,
                ],
            ]
        ];

        foreach ($input as $key => $value) {
            /** @var InsuranceRepository $insurance */
            $insurance = App::make(InsuranceRepository::class);
            $insurance->store($input[$key]);
        }
    }
}
