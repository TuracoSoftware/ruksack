<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BoyScoutCamp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('camps', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('phone_number');
      $table->string('address');
      $table->string('city');
      $table->string('state');
      $table->integer('zip');
      $table->string('schedule');
      $table->string('number_of_weeks');
      $table->string('permissions');
      $table->string('director_name');
      $table->string('director_phone_number');
      $table->timestamps();

      $table->unsignedInteger('council_id')->nullable();
      $table->foreign('council_id')->references('id')->on('councils');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
