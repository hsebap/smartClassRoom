<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciasDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias_docentes', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha');
            $table->boolean('presente');
            $table->unsignedInteger('docente_id');
            $table->foreign('docente_id')->references('id')->on('docentes');
            $table->unsignedInteger('clase_id');
            $table->foreign('clase_id')->references('id')->on('clases');
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
        Schema::dropIfExists('asistencias_docentes');
    }
}
