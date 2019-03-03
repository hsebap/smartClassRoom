<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->date('fecha');
            $table->string('tema',200);
            $table->unsignedInteger('planificacion_id');
            $table->foreign('planificacion_id')->references('id')->on('planificaciones');
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
        Schema::dropIfExists('clases');
    }
}
