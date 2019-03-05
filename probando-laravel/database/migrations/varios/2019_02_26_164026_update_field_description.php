<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateFieldDescription extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notas', function (Blueprint $table) {
            //Trying to change some fields y table notas
            $table->renameColumn('description', 'descripcion');
            $table->renameColumn('title', 'titulo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notas', function (Blueprint $table) {
            //
            $table->renameColumn('descripcion', 'description');
            $table->renameColumn('titulo', 'title');
        });
    }
}
