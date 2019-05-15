<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagenCatelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagen_catels', function (Blueprint $table) {
            $table->increments('id_foto');
            $table->string('nombre_foto');
            $table->integer('id_catel')->unsigned();
            $table->foreign('id_catel')->references('id_catel')->on('userscatel');
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
        Schema::dropIfExists('imagen_catels');
    }
}
