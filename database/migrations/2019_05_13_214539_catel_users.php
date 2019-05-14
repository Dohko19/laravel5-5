<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CatelUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userscatel', function (Blueprint $table) {
            $table->increments('id_catel');
            $table->string('name')->nulleable();
            $table->string('email');
            $table->integer('edad')->nulleable();
            $table->integer('telefono');
            $table->string('gradoe')->nulleable();
            $table->string('puestotrabajo');
            $table->string('sexo')->nulleable();
            $table->string('empesc');
            $table->string('estadocivil');
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
        Schema::dropIfExists('userscatel');
    }
}
