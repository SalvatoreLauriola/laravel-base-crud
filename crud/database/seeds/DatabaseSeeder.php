<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        //ci risparmia di fare --class=PeopleTableSeeder ma solo php artisan db:seed e quindi "seminare" tutte le tabelle all'interno
        $this->call(PeopleTableSeeder::class);
    }
}
