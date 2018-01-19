<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrier_id')->unique();
            $table->integer('max_cargo_weight')->nullable();
            $table->integer('max_people')->nullable();
            $table->integer('max_autokran')->nullable();
            $table->integer('max_manipulator')->nullable();
            $table->integer('max_nizkoramnik')->nullable();
            $table->integer('max_lifter')->nullable();
            $table->integer('max_open')->nullable();
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
        Schema::dropIfExists('services');
    }
}
