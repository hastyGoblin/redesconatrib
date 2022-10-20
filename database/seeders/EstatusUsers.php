<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstatusUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estatusUsers')->insert([
            'ID'=>1,
            'estatus'=>"Registrado",
            'activo'=> 1,
        ]);

        DB::table('estatusUsers')->insert([
            'ID'=>2,
            'estatus'=>"Aceptado",
            'activo'=> 1,
        ]);

        DB::table('estatusUsers')->insert([
            'ID'=>3,
            'estatus'=>"Rechazado",
            'activo'=> 1,
        ]);
    }
}
 