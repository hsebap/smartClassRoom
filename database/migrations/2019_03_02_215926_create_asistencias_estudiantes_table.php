<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciasEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias_estudiantes', function (Blueprint $table) {
           $table->increments('id');
           $table->date('fecha');
           $table->boolean('presente');
           $table->unsignedInteger('estudiante_id');
           $table->foreign('estudiante_id')->references('id')->on('estudiantes');
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
        Schema::dropIfExists('asistencias_estudiantes');
    }
}
