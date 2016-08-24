<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MeritBadgeRequirements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirements', function (Blueprint $table) {
      $table->increments('id');
      $table->string('title_req');
      $table->string('description');

      $table->integer('meritB_id')->unsigned();
      $table->foreign('meritB_id')->references('id')->on('merit_badges');
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
