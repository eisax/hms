<?php

namespace Database\Seeders;

use App\Repositories\DoctorRepository;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str; // Import the Str class

class DoctorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $input = [
            [
                'first_name'           => 'Tariro',
                'last_name'            => 'Moyo',
                'email'                => Str::random(8) . '.tariro.moyo@example.com', // Unique email
                'password'             => '123456',
                'designation'          => 'Doctor',
                'gender'               => 1,
                'qualification'        => 'MBChB',
                'status'               => 1,
                'doctor_department_id' => 1,
                'specialist'           => 'Cardiology',
                'email_verified_at'    => Carbon::now(),
                'description'          => 'Cardiology specialist with 10+ years experience in interventional procedures',
            ],
            [
                'first_name'           => 'Farai',
                'last_name'            => 'Ndlovu',
                'email'                => Str::random(8) . '.farai.ndlovu@example.com', // Unique email
                'password'             => '123456',
                'designation'          => 'Doctor',
                'gender'               => 0,
                'qualification'        => 'MD',
                'status'               => 1,
                'doctor_department_id' => 2,
                'specialist'           => 'Pediatrics',
                'email_verified_at'    => Carbon::now(),
                'description'          => 'Pediatrician focused on childhood nutrition and developmental disorders',
            ],
            [
                'first_name'           => 'Rumbidzai',
                'last_name'            => 'Chiweshe',
                'email'                => Str::random(8) . '.rumbidzai.chiweshe@example.com', // Unique email
                'password'             => '123456',
                'designation'          => 'Doctor',
                'gender'               => 1,
                'qualification'        => 'MBBS',
                'status'               => 1,
                'doctor_department_id' => 3,
                'specialist'           => 'Orthopedics',
                'email_verified_at'    => Carbon::now(),
                'description'          => 'Orthopedic surgeon specializing in sports injuries and joint replacements',
            ],
            [
                'first_name'           => 'Tendai',
                'last_name'            => 'Makoni',
                'email'                => Str::random(8) . '.tendai.makoni@example.com', // Unique email
                'password'             => '123456',
                'designation'          => 'Doctor',
                'gender'               => 0,
                'qualification'        => 'MMed',
                'status'               => 1,
                'doctor_department_id' => 4,
                'specialist'           => 'Neurology',
                'email_verified_at'    => Carbon::now(),
                'description'          => 'Neurologist with expertise in epilepsy and neurodegenerative diseases',
            ],
            [
                'first_name'           => 'Chenai',
                'last_name'            => 'Sibanda',
                'email'                => Str::random(8) . '.chenai.sibanda@example.com', // Unique email
                'password'             => '123456',
                'designation'          => 'Doctor',
                'gender'               => 1,
                'qualification'        => 'FCPS',
                'status'               => 1,
                'doctor_department_id' => 5,
                'specialist'           => 'Dermatology',
                'email_verified_at'    => Carbon::now(),
                'description'          => 'Dermatologist offering advanced cosmetic and medical skin treatments',
            ],
            [
                'first_name'           => 'Kudakwashe',
                'last_name'            => 'Mpofu',
                'email'                => Str::random(8) . '.kuda.mpofu@example.com', // Unique email
                'password'             => '123456',
                'designation'          => 'Doctor',
                'gender'               => 0,
                'qualification'        => 'PhD',
                'status'               => 1,
                'doctor_department_id' => 6,
                'specialist'           => 'Oncology',
                'email_verified_at'    => Carbon::now(),
                'description'          => 'Oncologist leading our cancer research and chemotherapy programs',
            ]
        ];

        foreach ($input as $key => $value) {
            /** @var DoctorRepository $doctor */
            $doctor = App::make(DoctorRepository::class);
            $doctor->store($input[$key], false);
        }
    }
}