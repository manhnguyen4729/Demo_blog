<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VpUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_user', function (Blueprint $table) {
          $table->increments('user_id');
          $table->string('user_name');
          $table->string('user_password');
          $table->integer('user_level');
          $table->timestamp('user_create')->nullable();
          $table->timestamp('user_update')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vp_user');
    }
}
