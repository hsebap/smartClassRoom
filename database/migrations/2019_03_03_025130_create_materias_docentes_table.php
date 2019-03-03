<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias_docentes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('materia_id');
            $table->foreign('materia_id')->references('id')->on('materias');
            $table->unsignedInteger('docente_id');
            $table->foreign('docente_id')->references('id')->on('docentes');
            $table->string('cargo');
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
        Schema::dropIfExists('materias_docentes');
    }
}
