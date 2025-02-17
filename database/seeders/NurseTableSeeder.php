<?php

namespace Database\Seeders;

use App\Repositories\NurseRepository;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class NurseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $input = [
            [
                'first_name' => 'Tendai',
                'last_name' => 'Mashonganyika',
                'email' => Str::random(8).'.'.'Tendai'.'.'.'Mashonganyika@example.com',
                'password' => '123456',
                'designation' => 'Pediatric Nurse',
                'gender' => 1,
                'qualification' => 'BSc Nursing',
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Precious',
                'last_name' => 'Dube',
                'email' => Str::random(8).'.'.'Precious'.'.'.'Dube@example.com',
                'password' => '123456',
                'designation' => 'ICU Nurse',
                'gender' => 1,
                'qualification' => 'Post Basic BSc',
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Kudzai',
                'last_name' => 'Chikwinya',
                'email' => Str::random(8).'.'.'Kudzai'.'.'.'Chikwinya@example.com',
                'password' => '123456',
                'designation' => 'Emergency Nurse',
                'gender' => 0,
                'qualification' => 'Diploma in Nursing',
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Rutendo',
                'last_name' => 'Mutasa',
                'email' => Str::random(8).'.'.'Rutendo'.'.'.'Mutasa@example.com',
                'password' => '123456',
                'designation' => 'Maternity Nurse',
                'gender' => 1,
                'qualification' => 'GNM',
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Edgar',
                'last_name' => 'Zvinyengwa',
                'email' => Str::random(8).'.'.'Edgar'.'.'.'Zvinyengwa@example.com',
                'password' => '123456',
                'designation' => 'Surgical Nurse',
                'gender' => 0,
                'qualification' => 'BSc Nursing',
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Shingi',
                'last_name' => 'Makoni',
                'email' => Str::random(8).'.'.'Shingi'.'.'.'Makoni@example.com',
                'password' => '123456',
                'designation' => 'Oncology Nurse',
                'gender' => 1,
                'qualification' => 'MSc Nursing',
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Brian',
                'last_name' => 'Moyo',
                'email' => Str::random(8).'.'.'Brian'.'.'.'Moyo@example.com',
                'password' => '123456',
                'designation' => 'Cardiac Nurse',
                'gender' => 0,
                'qualification' => 'Post Basic BSc',
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Patience',
                'last_name' => 'Nyamukapa',
                'email' => Str::random(8).'.'.'Patience'.'.'.'Nyamukapa@example.com',
                'password' => '123456',
                'designation' => 'Community Nurse',
                'gender' => 1,
                'qualification' => 'GNM',
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Linda',
                'last_name' => 'Mapfumo',
                'email' => Str::random(8).'.'.'Linda'.'.'.'Mapfumo@example.com',
                'password' => '123456',
                'designation' => 'Psychiatric Nurse',
                'gender' => 0,
                'qualification' => 'BSc Nursing',
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Tawanda',
                'last_name' => 'Muzondo',
                'email' => Str::random(8).'.'.'Tawanda'.'.'.'Muzondo@example.com',
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
                [
                    'password' => Hash::make($value['password']),
                    ...$value
                ]
            );

            if ($user->wasRecentlyCreated) {
                $nurse->store($input[$key], false);
            }
        }
    }
}