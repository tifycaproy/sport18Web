<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadisticasEquipos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadisticas_equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_user_id')->unsigned();
            $table->integer('equipo_id')->unsigned();
            $table->integer('p_jugado');
            $table->integer('p_ganado');
            $table->integer('p_empatado');
            $table->integer('p_perdido');
            $table->integer('g_favor');
            $table->integer('g_contra');
            $table->boolean('apertura_cierre')->nullable();
            $table->integer('fecha_ano');
            $table->boolean('publico')->nullable();

            $table->timestamps();
        });
        Schema::table('estadisticas_equipos', function($table) {
            $table->foreign('role_user_id')->references('id')->on('role_user');
            $table->foreign('equipo_id')->references('id')->on('equipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadisticas_equipos');
    }
}

