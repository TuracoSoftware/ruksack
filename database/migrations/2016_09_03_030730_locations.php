<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Locations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('locations', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('phone_number');
        $table->string('address');
        $table->string('city');
        $table->string('state');
        $table->integer('zip');
        $table->string('remember_number')->nullable();

        $table->unsignedInteger('organization_id')->nullable();
        $table->foreign('organization_id')->references('id')->on('organizations');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('locations');
    }
}
