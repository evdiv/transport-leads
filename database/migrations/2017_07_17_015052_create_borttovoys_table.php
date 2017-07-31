<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBorttovoysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borttovoys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id');
            $table->float('length')->default(0);
            $table->float('capacity')->default(0);
            $table->integer('time_period')->default(1);
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
        Schema::dropIfExists('borttovoys');
    }
}
