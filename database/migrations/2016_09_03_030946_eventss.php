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
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('events');
    }
}
