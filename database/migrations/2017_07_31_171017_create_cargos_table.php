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
            $table->string('name');
            $table->integer('cargo_type_id');
            $table->integer('cargo_photo_id')->default(0);
            $table->integer('cargo_loading_list_id')->default(0);
            $table->text('description')->nullable();
            $table->float('weight')->default(0);
            $table->float('length')->default(0);
            $table->float('width')->default(0);
            $table->float('hight')->default(0);
            $table->float('units')->default(1);

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
