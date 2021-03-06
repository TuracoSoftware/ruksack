<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Units extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('units', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('unit_number');
        $table->string('address');
        $table->string('city');
        $table->string('state');
        $table->integer('zip');
        $table->string('scout_master_first_name');
        $table->string('scout_master_last_name');
        $table->string('scout_master_phone');
        $table->string('scout_master_email');
        $table->string('remember_number')->nullable();
        $table->timestamps();

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
      Schema::drop('units');
    }
}
