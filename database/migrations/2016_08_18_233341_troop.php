<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Troop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('troops', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('troop');
      $table->string('council');
      $table->string('address');
      $table->string('city');
      $table->string('state');
      $table->integer('zip');
      $table->string('scout_master_first_name');
      $table->string('scout_master_last_name');
      $table->string('scout_master_phone');
      $table->string('scout_master_email');
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
