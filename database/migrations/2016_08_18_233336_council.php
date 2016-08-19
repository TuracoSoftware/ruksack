<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Council extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('councils', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('phone_number');
      $table->string('address');
      $table->string('city');
      $table->string('state');
      $table->integer('zip');
      $table->string('permissions');
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
        //
    }
}
