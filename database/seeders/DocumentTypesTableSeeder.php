<?php

namespace Database\Seeders;

use App\Models\DocumentType;
use Illuminate\Database\Seeder;

class DocumentTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $input = [
            'Passport', 
            'Light Bill',
            'Driver License',
            'Voter ID',
            'Birth Certificate',
            'Medical Report',
            'Insurance Card',
            'Prescription Slip',
            'Discharge Summary',
            'Lab Report',
            'X-Ray Report',
            'Medical Bill'
        ];

        foreach ($input as $value) {
            DocumentType::create(['name' => $value]);
        }
    }
}
