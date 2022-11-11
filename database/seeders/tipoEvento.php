<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoEvento extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipoEvento')->insert([
            'ID'=>1,
            'estatus'=>"Login",
            'activo'=> 1,
        ]);

        DB::table('tipoEvento')->insert([
            'ID'=>2,
            'estatus'=>"Logout",
            'activo'=> 1,
        ]);
    }
}
