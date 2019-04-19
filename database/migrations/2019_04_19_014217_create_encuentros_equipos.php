<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuentrosEquipos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuentros_equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_user_id')->unsigned();
            $table->integer('equipo_id_1')->unsigned();
            $table->integer('equipo_id_2')->unsigned();
            $table->date('fecha_encuentro');
            $table->integer('goles_1')->nullable();
            $table->integer('goles_2')->nullable();
            $table->boolean('publico')->nullable();
            $table->timestamps();
        });
        Schema::table('encuentros_equipos', function($table) {
            $table->foreign('role_user_id')->references('id')->on('role_user');
            $table->foreign('equipo_id_1')->references('id')->on('equipos');
            $table->foreign('equipo_id_2')->references('id')->on('equipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encuentros_equipos');
    }
}
