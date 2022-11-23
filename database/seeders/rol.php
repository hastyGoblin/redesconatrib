<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class rol extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'ID'=>1,
            'rol'=> "Coordinador",
        ]);

        DB::table('roles')->insert([
            'ID'=>2,
            'rol'=> "Usuario",
        ]);
        // DB::table('roles')->insert([
        //     'ID'=>3,
        //     'rol'=> "Administrador",
        // ]);
    }
}
