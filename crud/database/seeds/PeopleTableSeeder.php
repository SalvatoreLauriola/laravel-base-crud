<?php

use Illuminate\Database\Seeder;
use App\People;
use Faker\Generator as Faker;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $records = 10;
        for($i = 0; $i < $records; $i++) {
            $person = new People();
            $person->name=$faker->firstname();
            $person->surname=$faker->lastname();
            $person->address=$faker->address();
            $person->age=$faker->numberBetween(18,80);
            
            $person -> save();
        }
    }
}