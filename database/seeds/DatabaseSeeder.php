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
         $this->call(UserTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(GovernorateTableSeeder::class);
        $this->call(NationalityTableSeeder::class);
        $this->call(NeighborhoodTableSeeder::class);
        $this->call(CityTableSeeder::class);

    }
}
