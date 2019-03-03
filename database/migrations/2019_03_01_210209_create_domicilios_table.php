<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('calle',200);
            $table->unsignedInteger('numero');
            $table->unsignedInteger('piso')->nullable();
            $table->string('departamento',20)->nullable();
            $table->string('manzana',20)->nullable();
            $table->string('lote')->nullable();
            $table->string('ciudad');
            $table->unsignedInteger('persona_id');
            $table->foreign('persona_id')->references('id')->on('personas');

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
        Schema::dropIfExists('domicilios');
    }
}
