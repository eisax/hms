<?php

namespace Database\Seeders;

use App\Repositories\NurseRepository;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use App\Models\User;

class NurseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $input = [
            [
                'first_name' => 'Farai',
                'last_name' => 'Moyo',
                'email' => 'farai.moyo.nurse@example.com',
                'password' => '123456',
                'designation' => 'Pediatric Nurse',
                'gender' => 1,
                'qualification' => 'BSc Nursing',
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Tariro',
                'last_name' => 'Ndlovu',
                'email' => 'tariro.nurse@example.com',
                'password' => '123456',
                'designation' => 'ICU Nurse',
                'gender' => 1,
                'qualification' => 'Post Basic BSc',
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Tafadzwa',
                'last_name' => 'Makoni',
                'email' => 'tafadzwa.nurse@example.com',
                'password' => '123456',
                'designation' => 'Emergency Nurse',
                'gender' => 0,
                'qualification' => 'Diploma in Nursing',
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Rumbidzai',
                'last_name' => 'Chiweshe',
                'email' => 'rumbidzai.nurse@example.com',
                'password' => '123456',
                'designation' => 'Maternity Nurse',
                'gender' => 1,
                'qualification' => 'GNM',
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Kudakwashe',
                'last_name' => 'Mpofu',
                'email' => 'kudakwashe.mpofu@example.com',
                'password' => '123456',
                'designation' => 'Surgical Nurse',
                'gender' => 0,
                'qualification' => 'BSc Nursing',
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Chenai',
                'last_name' => 'Sibanda',
                'email' => 'chenai.nurse@example.com',
                'password' => '123456',
                'designation' => 'Oncology Nurse',
                'gender' => 1,
                'qualification' => 'MSc Nursing',
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Munyaradzi',
                'last_name' => 'Mangena',
                'email' => 'munyaradzi.mangena@example.com',
                'password' => '123456',
                'designation' => 'Cardiac Nurse',
                'gender' => 0,
                'qualification' => 'Post Basic BSc',
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Tsitsi',
                'last_name' => 'Nyoni',
                'email' => 'tsitsi.nyoni@example.com',
                'password' => '123456',
                'designation' => 'Community Nurse',
                'gender' => 1,
                'qualification' => 'GNM',
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Tanaka',
                'last_name' => 'Mabika',
                'email' => 'tanaka.mabika@example.com',
                'password' => '123456',
                'designation' => 'Psychiatric Nurse',
                'gender' => 0,
                'qualification' => 'BSc Nursing',
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Vimbai',
                'last_name' => 'Gumbo',
                'email' => 'vimbai.gumbo@example.com',
                'password' => '123456',
                'designation' => 'Neonatal Nurse',
                'gender' => 1,
                'qualification' => 'Post Basic BSc',
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ]
        ];

        foreach ($input as $key => $value) {
            /** @var NurseRepository $nurse */
            $nurse = App::make(NurseRepository::class);
            $user = User::firstOrCreate(
                ['email' => $value['email']],
                $value
            );
            $nurse->store($value, false);
        }
    }
}
