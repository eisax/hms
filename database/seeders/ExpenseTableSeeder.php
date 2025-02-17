<?php

namespace Database\Seeders;

use App\Models\Expense;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ExpenseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $input = [
            [
                'expense_head' => 1,
                'name' => 'Whoop Vega',
                'invoice_number' => 'TDX124',
                'date' => Carbon::now(),
                'amount' => '2131',
                'description' => 'Building Rent',

            ],
            [
                'expense_head' => 2,
                'name' => 'Voluptatem rerum mol',
                'invoice_number' => 'RXA526',
                'date' => Carbon::parse(Carbon::now())->addDays(1),
                'amount' => '2135',
                'description' => 'Equipments',

            ],
            [
                'expense_head' => 3,
                'name' => 'Ut nostrud dolore do',
                'invoice_number' => 'QAL951',
                'date' => Carbon::parse(Carbon::now())->addDays(2),
                'amount' => '3453',
                'description' => 'Electricity Bill',

            ],
            [
                'expense_head' => 4,
                'name' => 'Quo atque nisi minim',
                'invoice_number' => 'UGI845',
                'date' => Carbon::parse(Carbon::now())->addDays(3),
                'amount' => '3543',
                'description' => 'Telephone Bill',

            ],
            [
                'expense_head' => 5,
                'name' => 'A consectetur in co',
                'invoice_number' => 'OUZ891',
                'date' => Carbon::parse(Carbon::now())->addDays(4),
                'amount' => '6876',
                'description' => 'Power Generator Fuel Charge',

            ],
            [
                'expense_head' => 6,
                'name' => 'Cumque et labore dol',
                'invoice_number' => 'TUC851',
                'date' => Carbon::parse(Carbon::now())->addDays(5),
                'amount' => '8796',
                'description' => 'Tea Expense',

            ],
            [
                'expense_head' => 1,
                'name' => 'Dolorem sed id odit',
                'invoice_number' => 'OGB981',
                'date' => Carbon::parse(Carbon::now())->addDays(6),
                'amount' => '9786',
                'description' => 'Building Rent',

            ],
            [
                'expense_head' => 2,
                'name' => 'Ut et nostrum beatae',
                'invoice_number' => 'OGB981',
                'date' => Carbon::parse(Carbon::now())->addDays(7),
                'amount' => '3213',
                'description' => 'Equipments',

            ],
            [
                'expense_head' => 3,
                'name' => 'Omnis et vero ipsam ',
                'invoice_number' => 'IYF984',
                'date' => Carbon::parse(Carbon::now())->addDays(8),
                'amount' => '3126',
                'description' => 'Electricity Bill',

            ],
            [
                'expense_head' => 4,
                'name' => 'At mollit laboriosam',
                'invoice_number' => 'IYC685',
                'date' => Carbon::parse(Carbon::now())->addDays(9),
                'amount' => '3455',
                'description' => 'Telephone Bill',

            ],
            [
                'expense_head' => 5,
                'name' => 'Ratione Nam doloribu',
                'invoice_number' => 'OGB981',
                'date' => Carbon::parse(Carbon::now())->addDays(10),
                'amount' => '3546',
                'description' => 'Power Generator Fuel Charge',

            ],
            [
                'expense_head' => 6,
                'name' => 'Minim sit ea eligend',
                'invoice_number' => 'OGB981',
                'date' => Carbon::parse(Carbon::now())->addDays(2),
                'amount' => '4563',
                'description' => 'Tea Expense',

            ],
            [
                'expense_head' => 7,
                'name' => 'Medical Supplies',
                'invoice_number' => 'MED789',
                'date' => Carbon::parse(Carbon::now())->addDays(11),
                'amount' => '4500',
                'description' => 'Monthly medical consumables restock',

            ],
            [
                'expense_head' => 8,
                'name' => 'Ambulance Maintenance',
                'invoice_number' => 'AMB456',
                'date' => Carbon::parse(Carbon::now())->addDays(12),
                'amount' => '3200',
                'description' => 'Vehicle servicing and fuel costs',

            ],
            [
                'expense_head' => 9,
                'name' => 'Staff Training',
                'invoice_number' => 'TRN123',
                'date' => Carbon::parse(Carbon::now())->addDays(13),
                'amount' => '6800',
                'description' => 'CPR certification renewal for nurses',

            ],
            [
                'expense_head' => 10,
                'name' => 'Patient Meals',
                'invoice_number' => 'NUT555',
                'date' => Carbon::parse(Carbon::now())->addDays(14),
                'amount' => '2850',
                'description' => 'Weekly food supplies for patients',

            ],
            [
                'expense_head' => 11,
                'name' => 'Laundry Services',
                'invoice_number' => 'LND333',
                'date' => Carbon::parse(Carbon::now())->addDays(15),
                'amount' => '1750',
                'description' => 'Linens and uniform cleaning',

            ],
            [
                'expense_head' => 12,
                'name' => 'Pharmacy Restock',
                'invoice_number' => 'PHR999',
                'date' => Carbon::parse(Carbon::now())->addDays(16),
                'amount' => '9200',
                'description' => 'Essential medications purchase',

            ],
        ];

        foreach ($input as $data) {
            Expense::create($data);
        }
    }
}
