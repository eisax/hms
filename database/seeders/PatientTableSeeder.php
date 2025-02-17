<?php

namespace Database\Seeders;

use App\Repositories\PatientRepository;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str; // Import the Str class

class PatientTableSeeder extends Seeder
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
                'email' => Str::random(8) . '.farai.moyo@example.com', // Unique email
                'password' => '123456',
                'gender' => 0,
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Tariro',
                'last_name' => 'Ndlovu',
                'email' => Str::random(8) . '.tariro.ndlovu@example.com', // Unique email
                'password' => '123456',
                'gender' => 1,
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Tafadzwa',
                'last_name' => 'Sibanda',
                'email' => Str::random(8) . '.tafadzwa.sibanda@example.com', // Unique email
                'password' => '123456',
                'gender' => 0,
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Rumbidzai',
                'last_name' => 'Mpofu',
                'email' => Str::random(8) . '.rumbidzai.mpofu@example.com', // Unique email
                'password' => '123456',
                'gender' => 1,
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Kudakwashe',
                'last_name' => 'Mangena',
                'email' => Str::random(8) . '.kudakwashe.mangena@example.com', // Unique email
                'password' => '123456',
                'gender' => 0,
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Chenai',
                'last_name' => 'Gumbo',
                'email' => Str::random(8) . '.chenai.gumbo@example.com', // Unique email
                'password' => '123456',
                'gender' => 1,
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Munyaradzi',
                'last_name' => 'Hove',
                'email' => Str::random(8) . '.munyaradzi.hove@example.com', // Unique email
                'password' => '123456',
                'gender' => 0,
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Tsitsi',
                'last_name' => 'Matanga',
                'email' => Str::random(8) . '.tsitsi.matanga@example.com', // Unique email
                'password' => '123456',
                'gender' => 1,
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Tanaka',
                'last_name' => 'Banda',
                'email' => Str::random(8) . '.tanaka.banda@example.com', // Unique email
                'password' => '123456',
                'gender' => 0,
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Vimbai',
                'last_name' => 'Chiweshe',
                'email' => Str::random(8) . '.vimbai.chiweshe@example.com', // Unique email
                'password' => '123456',
                'gender' => 1,
                'status' => 1,
                'email_verified_at' => Carbon::now(),
            ]
        ];

        foreach ($input as $key => $value) {
            /** @var PatientRepository $patient */
            $patient = App::make(PatientRepository::class);
            $patient->store($input[$key], false);
        }
    }
}