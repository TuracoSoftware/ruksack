<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTypeToUsers extends Migration
{
    public function up() {
      Schema::table('users', function (Blueprint $table) {
        $table->string('type')->nullable();
      });
    }
}
