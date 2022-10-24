<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConstanciasUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ConstanciasUsuarios', function (Blueprint $table){

            $table->increments('ID');
            $table->integer('fk_users')->unsigned();
            $table->foreign('fk_users')->references('ID')->on('users');
            $table->dateTime('created_at', $precision = 0)->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at', $precision = 0)->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));     
            $table->boolean('activo')->default(1);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ConstanciasUsuarios');
    }
}