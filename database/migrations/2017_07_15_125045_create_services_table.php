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
            $table->integer('takelaj_max_weight')->nullable();
            $table->integer('gruzchik_number')->nullable();
            $table->integer('autokran_14')->nullable();
            $table->integer('autokran_16')->nullable();
            $table->integer('autokran_25')->nullable();
            $table->integer('autokran_32')->nullable();
            $table->integer('autokran_40')->nullable();
            $table->integer('autokran_50')->nullable();
            $table->integer('autokran_70')->nullable();
            $table->integer('autokran_90')->nullable();
            $table->integer('manipulator_3')->nullable();
            $table->integer('manipulator_5')->nullable();
            $table->integer('manipulator_7')->nullable();
            $table->integer('manipulator_10')->nullable();
            $table->integer('nizkoramnik_15')->nullable(); 
            $table->integer('nizkoramnik_25')->nullable(); 
            $table->integer('nizkoramnik_35')->nullable(); 
            $table->integer('nizkoramnik_40')->nullable(); 
            $table->integer('lifter_1')->nullable(); 
            $table->integer('lifter_3')->nullable(); 
            $table->integer('lifter_5')->nullable(); 
            $table->integer('open_6')->nullable(); 
            $table->integer('open_9')->nullable(); 
            $table->integer('open_12')->nullable(); 
            $table->integer('open_13')->nullable(); 
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
