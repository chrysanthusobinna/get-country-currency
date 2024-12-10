<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CountryCurrency;

class CountryCurrencySeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['country' => 'United States', 'currency_name' => 'US Dollar', 'currency_code' => 'USD', 'currency_symbol' => '&#36;'],
            ['country' => 'Nigeria', 'currency_name' => 'Naira', 'currency_code' => 'NGN', 'currency_symbol' => '&#8358;'],
            ['country' => 'United Kingdom', 'currency_name' => 'Pound Sterling', 'currency_code' => 'GBP', 'currency_symbol' => '&#163;'],
            // more countries will be added
        ];

        foreach ($data as $entry) {
            CountryCurrency::create($entry);
        }
    }
}
