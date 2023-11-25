<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $egyptGovernorates = [
            ['name' => 'Cairo'],
            ['name' => 'Giza'],
            ['name' => 'Alexandria'],
            ['name' => 'Dakahlia'],
            ['name' => 'Red Sea'],
            ['name' => 'Beheira'],
            ['name' => 'Fayoum'],
            ['name' => 'Gharbiya'],
            ['name' => 'Ismailia'],
            ['name' => 'Menofia'],
            ['name' => 'Minya'],
            ['name' => 'Qaliubiya'],
            ['name' => 'New Valley'],
            ['name' => 'Suez'],
            ['name' => 'Aswan'],
            ['name' => 'Assiut'],
            ['name' => 'Beni Suef'],
            ['name' => 'Port Said'],
            ['name' => 'Damietta'],
            ['name' => 'Sharkia'],
            ['name' => 'South Sinai'],
            ['name' => 'Kafr Al sheikh'],
            ['name' => 'Matrouh'],
            ['name' => 'Luxor'],
            ['name' => 'Qena'],
            ['name' => 'North Sinai'],
            ['name' => 'Sohag']
        ];

        foreach ($egyptGovernorates as $gov) {
            City::create([
                'country_id' => 1,
                'name' => $gov['name']
            ]);
        }

        $saudiCities = [
            ['name' => 'Tabuk'],
            ['name' => 'Riyadh'],
            ['name' => 'At Taif'],
            ['name' => 'Makkah Al Mukarramah'],
            ['name' => 'Hail'],
            ['name' => 'Buraydah'],
            ['name' => 'Al Hufuf'],
            ['name' => 'Ad Dammam'],
            ['name' => 'Al Madinah Al Munawwarah'],
            ['name' => 'Abha'],
            ['name' => 'Jazan'],
            ['name' => 'Jeddah'],
            ['name' => 'Al Majmaah'],
            ['name' => 'Al Khubar'],
            ['name' => 'Hafar Al Batin'],
            ['name' => 'Khamis Mushayt'],
            ['name' => 'Ahad Rifaydah'],
            ['name' => 'Al Qatif'],
            ['name' => 'Unayzah'],
            ['name' => 'Qaryat Al Ulya'],
            ['name' => 'Al Jubail'],
            ['name' => 'An Nuayriyah'],
            ['name' => 'Dhahran'],
            ['name' => 'Al Wajh'],
            ['name' => 'Buqayq'],
            ['name' => 'Az Zulfi'],
            ['name' => 'Khaybar'],
            ['name' => 'Al Ghat'],
            ['name' => 'Umluj'],
            ['name' => 'Rabigh'],
            ['name' => 'Afif'],
            ['name' => 'Thadiq'],
            ['name' => 'Sayhat'],
            ['name' => 'Tarut'],
            ['name' => 'Yanbu'],
            ['name' => 'Shaqra'],
            ['name' => 'Ad Duwadimi'],
            ['name' => 'Ad Diriyah'],
            ['name' => 'Quwayiyah'],
            ['name' => 'Al Muzahimiyah'],
            ['name' => 'Badr'],
            ['name' => 'Al Kharj'],
            ['name' => 'Ad Dilam'],
            ['name' => 'Ash Shinan'],
            ['name' => 'Al Khurmah'],
            ['name' => 'Al Jumum'],
            ['name' => 'Al Majardah'],
            ['name' => 'As Sulayyil'],
            ['name' => 'Tathilith'],
            ['name' => 'Bishah'],
            ['name' => 'Al Baha'],
            ['name' => 'Al Qunfidhah'],
            ['name' => 'Muhayil'],
            ['name' => 'Thuwal'],
            ['name' => 'Duba'],
            ['name' => 'Turbah'],
            ['name' => 'Safwa'],
            ['name' => 'Inak'],
            ['name' => 'Turaif'],
            ['name' => 'Arar'],
            ['name' => 'Al Qurayyat'],
            ['name' => 'Sakaka'],
            ['name' => 'Rafha'],
            ['name' => 'Dawmat Al Jandal'],
            ['name' => 'Ar Rass'],
            ['name' => 'Al Midhnab'],
            ['name' => 'Al Khafji'],
            ['name' => 'Riyad Al Khabra'],
            ['name' => 'Al Badai'],
            ['name' => 'Ras Tannurah'],
            ['name' => 'Al Bukayriyah'],
            ['name' => 'Ash Shimasiyah'],
            ['name' => 'Al Hariq'],
            ['name' => 'Hawtat Bani Tamim'],
            ['name' => 'Layla'],
            ['name' => 'Billasmar'],
            ['name' => 'Sharurah'],
            ['name' => 'Najran'],
            ['name' => 'Sabya'],
            ['name' => 'Abu Arish'],
            ['name' => 'Samtah'],
            ['name' => 'Ahad Al Musarihah'],
            ['name' => 'King Abdullah Economic City']
        ];
        

        foreach ($saudiCities as $city) {
            City::create([
                'country_id' => 2,
                'name' => $city['name']
            ]);
        }

        $uaeCities = [
            ['name' => 'Abu Dhabi'],
            ['name' => 'Dubai'],
            ['name' => 'Sharjah'],
            ['name' => 'Al Ain'],
            ['name' => 'Ajman'],
            ['name' => 'Ras Al Khaimah'],
            ['name' => 'Fujairah'],
            ['name' => 'Umm Al Quwain'],
            ['name' => 'Khor Fakkan'],
            ['name' => 'Dibba Al-Hisn'],
            ['name' => 'Dibba Al-Fujairah'],
            ['name' => 'Silah'],
            ['name' => 'Kalba'],
            ['name' => 'Al Dhaid'],
            ['name' => 'Madinat Zayed'],
            ['name' => 'Ruwais'],
            ['name' => 'Liwa Oasis'],
            ['name' => 'Dhaid'],
            ['name' => 'Ghayathi'],
            ['name' => 'Ar-Rams'],
            ['name' => 'Dibba Al-Baya'],
            ['name' => 'Hatta'],
            ['name' => 'Al Madam']
        ];
        
        foreach ($uaeCities as $city) {
            City::create([
                'country_id' => 3,
                'name' => $city['name']
            ]);
        }
    }
}
