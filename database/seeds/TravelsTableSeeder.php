<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $package = new Package();
            $package -> package_name = $faker -> word();
            $package -> location = $faker -> word();
            $package -> price = $faker -> word();
            $package -> discount = $faker -> numberBetween(0, 50);
            $package -> air_company = $faker -> word();
            $package -> departure = $faker -> dateTime();
            $package -> arrival = $faker -> dateTime();
            $package -> save();
        }
    }
}

