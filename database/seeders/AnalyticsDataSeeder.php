<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Medicine;
use App\Models\Prescription;
use App\Models\Bill;
use App\Models\PatientDiagnosisTest;
use App\Models\DiagnosisCategory;
use App\Models\User;
use App\Models\Department;
use Carbon\Carbon;
use Faker\Factory as Faker;
use App\Models\Appointment;
use App\Models\Category;

class AnalyticsDataSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Remove the admin user creation code since it's already created by AdminUserSeeder
        // Start directly with diagnosis categories
        $categories = [
            ['name' => 'General Checkup', 'description' => 'Routine health examination'],
            ['name' => 'Blood Test', 'description' => 'Complete blood count and analysis'],
            ['name' => 'Cardiology', 'description' => 'Heart-related diagnostics'],
            ['name' => 'Radiology', 'description' => 'Imaging diagnostics']
        ];

        foreach ($categories as $category) {
            DiagnosisCategory::create($category);
        }

        // Create 50 users first
        User::factory()->count(50)->create();
        
        // Then create doctors using existing users
        $doctors = Doctor::factory()->count(20)->create();

        // Create 50 patients with related data
        Patient::factory()->count(50)->create()->each(function ($patient) use ($faker, $doctors) {
            // Create appointments
            Appointment::factory()->count(rand(1, 10))->create([
                'patient_id' => $patient->id,
                'doctor_id' => $doctors->random()->id,
                'opd_date' => $faker->dateTimeBetween('-1 year', 'now')
            ]);

            // Create bills
            Bill::factory()->count(rand(1, 5))->create([
                'patient_id' => $patient->id,
                'bill_date' => $faker->dateTimeBetween('-1 year', 'now')
            ]);

            // Create diagnosis tests
            PatientDiagnosisTest::factory()->count(rand(1, 8))->create([
                'patient_id' => $patient->id,
                'doctor_id' => $doctors->random()->id,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'category_id' => DiagnosisCategory::all()->random()->id
            ]);
        });

        // Create medicines with inventory data
        Medicine::factory()->count(30)->create([
            'available_quantity' => $faker->numberBetween(5, 100),
            'selling_price' => $faker->randomFloat(2, 5, 200),
            'minimum_quantity' => 10,
            'category_id' => Category::inRandomOrder()->first()->id
        ]);

        // Create explicit low stock medicines (5 items below minimum quantity)
        Medicine::factory()->count(5)->create([
            'available_quantity' => 8,
            'minimum_quantity' => 10,
            'category_id' => Category::inRandomOrder()->first()->id
        ]);

        // Create additional appointments for trend analysis
        Appointment::factory()->count(200)->create([
            'patient_id' => Patient::inRandomOrder()->first()->id,
            'doctor_id' => Doctor::inRandomOrder()->first()->id,
            'opd_date' => $faker->dateTimeBetween('-1 year', 'now')
        ]);

        // Create prescriptions linking to patients and medicines
        Patient::all()->each(function ($patient) use ($doctors) {
            Prescription::factory()->count(rand(1, 5))->create([
                'patient_id' => $patient->id,
                'doctor_id' => $doctors->random()->id,
                'created_at' => now()->subMonths(rand(1, 12))
            ])->each(function ($prescription) {
                $prescription->medicines()->attach(
                    Medicine::all()->random(rand(1, 3))->pluck('id')->toArray()
                );
            });
        });
    }
}