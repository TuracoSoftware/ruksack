<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Camps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('camps', function (Blueprint $table) {
                  $table->increments('id');
                  $table->string('name');
                  $table->string('phone_number');
                  $table->string('address');
                  $table->string('city');
                  $table->string('state');
                  $table->integer('zip');
                  $table->string('remember_number')->nullable();

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
