<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Scouts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('scouts', function(Blueprint $table) {
    $table->increments('id');
    $table->string('name');
    $table->string('address')->nullable();
    $table->string('city')->nullable();
    $table->string('state')->nullable();
    $table->integer('zip')->nullable();
    $table->string('date_of_birth')->nullable();
    $table->integer('grade')->nullable();
    $table->string('contact_phone_number')->nullable();
    $table->string('emergency_contact_name')->nullable();
    $table->string('emergency_contact_phone_number')->nullable();
    $table->string('allergies')->nullable();

    $table->unsignedInteger('troop_id')->nullable();
    $table->foreign('troop_id')->references('id')->on('troops');
    $table->unsignedInteger('council_id')->nullable();
    $table->foreign('council_id')->references('id')->on('councils');
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
