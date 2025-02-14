<?php

namespace Database\Seeders;

use App\Models\Medicine;
use Illuminate\Database\Seeder;

class MedicineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $input = [
            [
                'category_id' => 1,
                'brand_id' => 1,
                'name' => 'Aciclovir',
                'selling_price' => 90,
                'buying_price' => 120,
                'side_effects' => 'As directed by the Physician',
                'description' => 'It\'s a Anti-viral tablets.',
                'salt_composition' => 'aciclovir',
            ],
            [
                'category_id' => 2,
                'brand_id' => 2,
                'name' => 'Atenolol',
                'selling_price' => 190,
                'buying_price' => 220,
                'side_effects' => 'As directed by the Physician',
                'description' => 'It\'s a hypertension and angina and in stable heart attack patients to prevent death.',
                'salt_composition' => 'atenolol',
            ],
            [
                'category_id' => 3,
                'brand_id' => 3,
                'name' => 'Amlodipine Olmesartan',
                'selling_price' => 30,
                'buying_price' => 70,
                'side_effects' => 'As directed by the Physician',
                'description' => 'It\'s a combination medicine used to treat high blood pressure (hypertension).',
                'salt_composition' => 'amlodipine olmesartan',
            ],
            [
                'category_id' => 4,
                'brand_id' => 4,
                'name' => 'Camylofin',
                'selling_price' => 50,
                'buying_price' => 90,
                'side_effects' => 'As directed by the Physician',
                'description' => 'It\'s an antimuscarinic drug that also causes direct smooth muscle relaxation.',
                'salt_composition' => 'camylofin',
            ],
            [
                'category_id' => 5,
                'brand_id' => 5,
                'name' => 'Unidex',
                'selling_price' => 120,
                'buying_price' => 160,
                'side_effects' => 'As directed by the Physician',
                'description' => 'It\'s a drug which is used at the time of depression.',
                'salt_composition' => 'unidex',
            ],
            [
                'category_id' => 6,
                'brand_id' => 6,
                'name' => 'Cetirizine',
                'selling_price' => 45,
                'buying_price' => 75,
                'side_effects' => 'As directed by the Physician',
                'description' => 'Antihistamine used to treat allergy symptoms',
                'salt_composition' => 'cetirizine hydrochloride',
            ],
            [
                'category_id' => 7,
                'brand_id' => 7,
                'name' => 'Pantoprazole',
                'selling_price' => 85,
                'buying_price' => 130,
                'side_effects' => 'As directed by the Physician',
                'description' => 'Proton pump inhibitor for acid reflux treatment',
                'salt_composition' => 'pantoprazole sodium',
            ],
            [
                'category_id' => 8,
                'brand_id' => 8,
                'name' => 'Metformin',
                'selling_price' => 25,
                'buying_price' => 50,
                'side_effects' => 'As directed by the Physician',
                'description' => 'First-line medication for type 2 diabetes',
                'salt_composition' => 'metformin hydrochloride',
            ],
            [
                'category_id' => 9,
                'brand_id' => 9,
                'name' => 'Fluoxetine',
                'selling_price' => 65,
                'buying_price' => 110,
                'side_effects' => 'As directed by the Physician',
                'description' => 'SSRI antidepressant medication',
                'salt_composition' => 'fluoxetine hydrochloride',
            ],
            [
                'category_id' => 10,
                'brand_id' => 10,
                'name' => 'Warfarin',
                'selling_price' => 30,
                'buying_price' => 60,
                'side_effects' => 'As directed by the Physician',
                'description' => 'Anticoagulant to prevent blood clots',
                'salt_composition' => 'warfarin sodium',
            ],
            [
                'category_id' => 11,
                'brand_id' => 11,
                'name' => 'Insulin Glargine',
                'selling_price' => 450,
                'buying_price' => 600,
                'side_effects' => 'As directed by the Physician',
                'description' => 'Long-acting basal insulin analog',
                'salt_composition' => 'insulin glargine',
            ],
        ];

        foreach ($input as $data) {
            Medicine::create($data);
        }
    }
}
