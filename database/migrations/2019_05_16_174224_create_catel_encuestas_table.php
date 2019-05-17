<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatelEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catel_encuestas', function (Blueprint $table) {
            $table->increments('id_cat_enc');
            $table->string('pregunta');
            $table->string('respuesta');
            $table->integer('id_foto')->unsigned();
            $table->foreign('id_foto')->references('id_foto')->on('imagen_catels');
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
        Schema::dropIfExists('catel_encuestas');
    }
}
