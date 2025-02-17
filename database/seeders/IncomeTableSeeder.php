<?php

namespace Database\Seeders;

use App\Models\Income;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class IncomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $input = [
            [
                'income_head' => 1,
                'name' => 'Whoop Vega',
                'invoice_number' => 'TDX124',
                'date' => Carbon::now(),
                'amount' => '9815',
                'description' => 'Receive Hospital Charges income',

            ],
            [
                'income_head' => 2,
                'name' => 'Voluptatem rerum mol',
                'invoice_number' => 'RXA526',
                'date' => Carbon::parse(Carbon::now())->addDays(1),
                'amount' => '4534',
                'description' => 'Receive Hospital Charges income',

            ],
            [
                'income_head' => 3,
                'name' => 'Ut nostrud dolore do',
                'invoice_number' => 'QAL951',
                'date' => Carbon::parse(Carbon::now())->addDays(2),
                'amount' => '4534',
                'description' => 'Receive Special Campaign income',

            ],
            [
                'income_head' => 4,
                'name' => 'Quo atque nisi minim',
                'invoice_number' => 'UGI845',
                'date' => Carbon::parse(Carbon::now())->addDays(3),
                'amount' => '2563',
                'description' => 'Receive Canteen Rent income',

            ],
            [
                'income_head' => 1,
                'name' => 'A consectetur in co',
                'invoice_number' => 'OUZ891',
                'date' => Carbon::parse(Carbon::now())->addDays(4),
                'amount' => '3465',
                'description' => 'Receive Hospital Charges income',

            ],
            [
                'income_head' => 2,
                'name' => 'Cumque et labore dol',
                'invoice_number' => 'TUC851',
                'date' => Carbon::parse(Carbon::now())->addDays(5),
                'amount' => '6246',
                'description' => 'Receive Hospital Charges income',

            ],
            [
                'income_head' => 3,
                'name' => 'Dolorem sed id odit',
                'invoice_number' => 'OGB981',
                'date' => Carbon::parse(Carbon::now())->addDays(6),
                'amount' => '6245',
                'description' => 'Receive Special Campaign income',

            ],
            [
                'income_head' => 4,
                'name' => 'Ut et nostrum beatae',
                'invoice_number' => 'OGB981',
                'date' => Carbon::parse(Carbon::now())->addDays(7),
                'amount' => '5646',
                'description' => 'Receive Canteen Rent income',

            ],
            [
                'income_head' => 1,
                'name' => 'Omnis et vero ipsam ',
                'invoice_number' => 'IYF984',
                'date' => Carbon::parse(Carbon::now())->addDays(8),
                'amount' => '5627',
                'description' => 'Receive Hospital Charges income',

            ],
            [
                'income_head' => 2,
                'name' => 'At mollit laboriosam',
                'invoice_number' => 'IYC685',
                'date' => Carbon::parse(Carbon::now())->addDays(9),
                'amount' => '8968',
                'description' => 'Receive Hospital Charges income',

            ],
            [
                'income_head' => 3,
                'name' => 'Ratione Nam doloribu',
                'invoice_number' => 'OGB981',
                'date' => Carbon::parse(Carbon::now())->addDays(10),
                'amount' => '8758',
                'description' => 'Receive Special Campaign income',

            ],
            [
                'income_head' => 4,
                'name' => 'Minim sit ea eligend',
                'invoice_number' => 'OGB981',
                'date' => Carbon::parse(Carbon::now())->addDays(2),
                'amount' => '9678',
                'description' => 'Receive Canteen Rent income',

            ],
            [
                'income_head' => 1,
                'name' => 'Emergency Room Fees',
                'invoice_number' => 'ERF335',
                'date' => Carbon::parse(Carbon::now())->addDays(11),
                'amount' => '11200',
                'description' => 'Receive Hospital Charges income',
            ],
            [
                'income_head' => 2,
                'name' => 'Physical Therapy',
                'invoice_number' => 'PHY772',
                'date' => Carbon::parse(Carbon::now())->addDays(12),
                'amount' => '6800',
                'description' => 'Receive Hospital Charges income',
            ],
            [
                'income_head' => 3,
                'name' => 'Charity Gala',
                'invoice_number' => 'CHG449',
                'date' => Carbon::parse(Carbon::now())->addDays(13),
                'amount' => '15400',
                'description' => 'Receive Special Campaign income',
            ],
            [
                'income_head' => 4,
                'name' => 'Cafeteria Franchise',
                'invoice_number' => 'CAF882',
                'date' => Carbon::parse(Carbon::now())->addDays(14),
                'amount' => '8900',
                'description' => 'Receive Canteen Rent income',
            ],
            [
                'income_head' => 1,
                'name' => 'Lab Testing',
                'invoice_number' => 'LAB551',
                'date' => Carbon::parse(Carbon::now())->addDays(15),
                'amount' => '13450',
                'description' => 'Receive Hospital Charges income',
            ],
            [
                'income_head' => 2,
                'name' => 'MRI Scans',
                'invoice_number' => 'MRI309',
                'date' => Carbon::parse(Carbon::now())->addDays(16),
                'amount' => '28700',
                'description' => 'Receive Hospital Charges income',
            ],
        ];

        foreach ($input as $data) {
            Income::create($data);
        }
    }
}
