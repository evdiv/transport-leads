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
            $table->integer('carrier_id');
            $table->integer('takelaj')->default(0);
            $table->integer('takelaj_max_weight')->nullable();
            $table->integer('gruzchik')->default(0);
            $table->integer('gruzchik_number_employees')->nullable();
            $table->integer('auto')->default(0);
            $table->integer('auto_autokran_14')->nullable();
            $table->integer('auto_autokran_16')->nullable();
            $table->integer('auto_autokran_25')->nullable();
            $table->integer('auto_autokran_32')->nullable();
            $table->integer('auto_autokran_40')->nullable();
            $table->integer('auto_autokran_50')->nullable();
            $table->integer('auto_autokran_70')->nullable();
            $table->integer('auto_autokran_90')->nullable();
            $table->integer('auto_manipulator_3')->nullable();
            $table->integer('auto_manipulator_5')->nullable();
            $table->integer('auto_manipulator_7')->nullable();
            $table->integer('auto_manipulator_10')->nullable();
            $table->integer('auto_nizkoramnik_15')->nullable(); 
            $table->integer('auto_nizkoramnik_25')->nullable(); 
            $table->integer('auto_nizkoramnik_35')->nullable(); 
            $table->integer('auto_nizkoramnik_40')->nullable(); 
            $table->integer('auto_lifter_1')->nullable(); 
            $table->integer('auto_lifter_3')->nullable(); 
            $table->integer('auto_lifter_5')->nullable(); 
            $table->integer('auto_opendeck_6')->nullable(); 
            $table->integer('auto_opendeck_9')->nullable(); 
            $table->integer('auto_opendeck_12')->nullable(); 
            $table->integer('auto_opendeck_13_5')->nullable(); 
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
