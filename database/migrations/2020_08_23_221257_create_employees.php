<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
         $table->id();
         $table->string('names',45);
         $table->string('lastnames',45);
         $table->string('email',100);
         $table->string('phone',75);
         $table->string('address',75);
         $table->boolean('availability');
         $table->bigInteger('work_experience_id')->unsigned();
         $table->bigInteger('profile_id')->unsigned();
         $table->foreign('work_experience_id')->references('id')->on('work_experience');
         $table->foreign('profile_id')->references('id')->on('profiles');
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
        Schema::dropIfExists('employees');
    }
}
