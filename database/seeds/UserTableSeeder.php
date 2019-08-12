<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $person =  User::create([
            'password'=>bcrypt('123123'),
            'firstName' => 'سندس',
            'secondName' => 'عبد العزيز',
            'thirdName' => 'محمد',
            'fourthName' => 'أبو حرب',
            'governorate' =>'غرب غزة',
            'city' =>'غزة',
            'neighborhood' =>'حي النصر',
            'address' =>'غزة النصر عمارة الملش3',
            'phone1' =>'2865581',
            'phone2' =>'54897',
            'type'=> 'شخص',
            'mobile' =>'059987515',
            'email' =>'sh@gmail.com',
            'nationality' =>'1',
            'countryOfResidence' =>'1',
            'identificationNum' =>'35486634',
            'definitionType' =>'هوية',
            'contactPerson' =>'محمد',
        ]);

        $person2 =  User::create([
            'password'=>bcrypt('123123'),
            'firstName' => 'سندس',
            'secondName' => 'عبد العزيز',
            'thirdName' => 'محمد',
            'fourthName' => 'أبو حرب',
            'governorate' =>'غرب غزة',
            'city' =>'غزة',
            'neighborhood' =>'حي النصر',
            'address' =>'غزة النصر عمارة الملش3',
            'phone1' =>'29865581',
            'phone2' =>'544897',
            'type'=> 'شخص',
            'mobile' =>'0549987515',
            'email' =>'sh@5gmail.com',
            'nationality' =>'1',
            'countryOfResidence' =>'1',
            'identificationNum' =>'35486634',
            'definitionType' =>'هوية',
            'contactPerson' =>'محمد',
        ]);

        $person3 =  User::create([
            'password'=>bcrypt('123123'),
            'firstName' => 'سندس',
            'secondName' => 'عبد العزيز',
            'thirdName' => 'محمد',
            'fourthName' => 'أبو حرب',
            'governorate' =>'غرب غزة',
            'city' =>'غزة',
            'neighborhood' =>'حي النصر',
            'address' =>'غزة النصر عمارة الملش3',
            'phone1' =>'289665581',
            'phone2' =>'5456897',
            'type'=> 'شخص',
            'mobile' =>'0599875515',
            'email' =>'sh54@gmail.com',
            'nationality' =>'1',
            'countryOfResidence' =>'1',
            'identificationNum' =>'354586634',
            'definitionType' =>'هوية',
            'contactPerson' =>'محمد',
        ]);
    }



}
