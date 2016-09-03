<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Eventss extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('events', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name');
    $table->string('leader');
    $table->string('location');
    $table->integer('max');
    $table->integer('min')->nullable();
    $table->string('time_start');
    $table->string('time_end');
    $table->string('notes')->nullable();
    $table->timestamps();

    $table->unsignedInteger('council_id');
    $table->foreign('council_id')->references('id')->on('councils');
    $table->unsignedInteger('camp_id')->nullable();
    $table->foreign('camp_id')->references('id')->on('camps');
    $table->unsignedInteger('troop_id')->nullable();
    $table->foreign('troop_id')->references('id')->on('troops');
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
