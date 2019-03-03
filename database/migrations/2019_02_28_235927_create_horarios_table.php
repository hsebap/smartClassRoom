<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dia');
            $table->time('horaInicio');
            $table->time('horaFin');
            $table->string('periodo',100);
            $table->unsignedInteger('materia_id');
            $table->foreign('materia_id')->references('id')->on('materias');
            $table->unsignedInteger('comision_id');
            $table->foreign('comision_id')->references('id')->on('comisiones');
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
        Schema::dropIfExists('horarios');
    }
}
