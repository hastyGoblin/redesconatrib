<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('apellido_paterno', 50);
            $table->string('apellido_materno', 50);
            $table->string('dependencia', 120);
            $table->string('cargo', 120);
            $table->char('numero_celular', 15);
            $table->string('email')->unique();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            $table->tinyinteger('fk_estado');
            $table->foreign('fk_estado')->references('id')->on('entidadfederativa');
            $table->tinyinteger('fk_estatus')->default(1);
            $table->foreign('fk_estatus')->references('ID')->on('EstatusUsers');
            $table->tinyinteger('id_red');
            $table->foreign('id_red')->references('id')->on('cat_redesconatrib');
            
            //$table->timestamps();
            $table->dateTime('created_at', $precision = 0)->default(DB::raw('CURRENT_TIMESTAMP '));
            $table->dateTime('updated_at', $precision = 0)->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('users');

    }
}
