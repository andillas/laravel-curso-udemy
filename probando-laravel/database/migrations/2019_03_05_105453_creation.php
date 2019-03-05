<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Creation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crud_coches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('marca', 50);
            $table->string('modelo', 70);
            $table->timestamps();
//            $table->timestamp('creado')->default('CURRENT_TIMESTAMP');
//            $table->timestamp('modificado')->default('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crud_coches');
    }
}
