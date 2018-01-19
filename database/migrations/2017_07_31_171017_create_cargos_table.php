<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->default(0);
            $table->string('name')->nullable();
            $table->string('size')->nullable();
            $table->string('dimention')->nullable();
            $table->integer('cargo_type_id')->default(0);
            $table->integer('cargo_photo_id')->default(0);
            $table->integer('cargo_loading_list_id')->default(0);
            $table->text('description')->nullable();
            $table->float('weight')->default(0);
            $table->float('length')->default(0);
            $table->float('width')->default(0);
            $table->float('height')->default(0);
            $table->float('quantity')->default(1);

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
        Schema::dropIfExists('cargos');
    }
}
