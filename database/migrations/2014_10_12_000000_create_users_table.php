<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('password');
            $table->string('definitionType')->nullable();
            $table->integer('identificationNum')->unsigned()->nullable();
            $table->string('firstName');
            $table->string('secondName');
            $table->string('thirdName');
            $table->string('fourthName');
            $table->string('governorate')->nullable();
            $table->string('city')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('address');
            $table->string('contactPerson')->nullable();
            $table->integer('phone1')->unsigned()->unique();
            $table->integer('phone2')->unsigned()->unique()->nullable();
            $table->string('type');
            $table->string('mobile')->unique()->nullable();
            $table->string('email')->unique();
            $table->string('nationality')->nullable();
            $table->string('countryOfResidence');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
