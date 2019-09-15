<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cedula');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('fotoc');
            $table->unsignedBigInteger('partido_id');
            $table->unsignedBigInteger('coorporacion_id');
            $table->unsignedBigInteger('municipio_id');

            $table->foreign('partido_id')->references('id')->on('partidos');
            $table->foreign('coorporacion_id')->references('id')->on('coorporacions');
            $table->foreign('municipio_id')->references('id')->on('municipios');

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
        Schema::dropIfExists('candidatos');
    }
}
