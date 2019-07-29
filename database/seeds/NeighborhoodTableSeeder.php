<?php

use Illuminate\Database\Seeder;

class NeighborhoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('neighborhoods')->insert([
            ['name' =>'حي الشجاعية'],
            ['name' =>'حي الزيتون'],
            ['name' =>'حي التفاح'],
            ['name' =>'حي المغاربة'],
            ['name' =>'حي المغازي'],

        ]);

    }
}
