<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BitacoraUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacoraUsuario', function (Blueprint $table) {
            $table->increments('ID');
            $table->dateTime('FechaEvento', $precision = 0)->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('fk_usuarioBitacora')->unsigned();
            $table->foreign('fk_usuarioBitacora')->references('ID')->on('users');
            $table->tinyInteger('fk_tipoEvento');
            $table->foreign('fk_tipoEvento')->references('ID')->on('TipoEvento');
            $table->boolean('activo')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
