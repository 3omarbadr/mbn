<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            [
                'id' => 1,
                'country_code' => 'EG',
                'name' => 'Egypt',
                'phone_code' => 20
            ],
            [
                'id' => 2,
                'country_code' => 'SA',
                'name' => 'Saudi Arabia',
                'phone_code' => 966
            ],
            [
                'id' => 3,
                'country_code' => 'AE',
                'name' => 'United Arab Emirates',
                'phone_code' => 971
            ],
        ];

        Country::insert($countries);
    }
}
