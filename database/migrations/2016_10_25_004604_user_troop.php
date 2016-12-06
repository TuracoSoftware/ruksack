<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserTroop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('user_troop', function (Blueprint $table) {
        $table->integer('user_id')->unsigned()->nullable();
        $table->integer('unit_id')->unsigned()->nullable();

        $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('unit_id')->references('id')->on('units');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('user_troop');
    }
}
