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

        $table->unsignedInteger('unit_id')->nullable();
        $table->foreign('unit_id')->references('id')->on('units');
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
      Schema::drop('scouts');
    }
}
