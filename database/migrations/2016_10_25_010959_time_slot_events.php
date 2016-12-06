<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TimeSlotEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('time_slot_event', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->integer('fee');
        $table->integer('event_id')->unsigned()->nullable();
        $table->integer('time_slot_id')->unsigned()->nullable();

        $table->foreign('event_id')->references('id')->on('events');
        $table->foreign('time_slot_id')->references('id')->on('time_slots');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('time_slot_event');
    }
}
