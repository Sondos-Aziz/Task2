<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['name' =>'غزة'],
            ['name' =>'رفح'],
            ['name' =>'المنصورة'],
            ['name' =>'حلب'],
            ['name' =>'طنطا'],

        ]);
    }
}
