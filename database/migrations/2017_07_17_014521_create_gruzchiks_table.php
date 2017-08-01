<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruzchiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gruzchiks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id');
            $table->integer('service_type')->default(1);
            $table->integer('number')->default(1);
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
        Schema::dropIfExists('gruzchiks');
    }
}
