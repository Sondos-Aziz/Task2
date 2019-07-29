<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            ['name' =>'فلسطين'],
            ['name' =>'مصر'],
            ['name' =>'لبنان'],
            ['name' =>'سوريا'],
            ['name' =>'الأردن'],

        ]);
    }
}
