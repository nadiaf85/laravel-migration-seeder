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
            $travel = new Travel();
            $travel -> package_name = $faker -> word();
            $travel -> location = $faker -> word();
            $travel -> price = $faker->randomDigit();
            $travel -> discount = $faker -> numberBetween(0, 50);
            $travel -> air_company = $faker -> word();
            $travel -> departure = $faker -> dateTime();
            $travel -> arrival = $faker -> dateTime();
            $travel -> save();
        }
    }
}

