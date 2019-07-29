<?php

use Illuminate\Database\Seeder;

class NationalityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nationalities')->insert([
            ['name' =>'فلسطيني '],
            ['name' =>'لبناني'],
            ['name' =>'سوري'],
            ['name' =>'أردني'],
            ['name' =>'مغربي '],
        ]);
    }
}
