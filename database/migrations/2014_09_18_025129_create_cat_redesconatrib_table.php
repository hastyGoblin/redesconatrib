<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatRedesconatribTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_redesconatrib', function (Blueprint $table) {
            $table->tinyinteger('id')->primary();
            $table->string('red');
            $table->string('landingPage');
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
        Schema::dropIfExists('cat_redesconatrib');
    }
}
