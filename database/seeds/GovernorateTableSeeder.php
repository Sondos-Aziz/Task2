<?php

use Illuminate\Database\Seeder;

class GovernorateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('governorates')->insert([
            ['name' =>'محافظة الوسطى'],
            ['name' =>'محافظة الجنوب'],
            ['name' =>'محافظة غرب غزة'],
            ['name' =>'محافظة شرق غزة'],

        ]);
    }
}
