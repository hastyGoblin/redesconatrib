<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>"Agustín Martínez Martínez",
            'email'=> "agustin.martinez@tsjcdmx.gob.mx",
            'password'=> bcrypt('12345678'),
            'id_red'=> 1,
            'activo'=> 1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name'=>"Erika Karla Jiménez Ramírez",
            'email'=> "erika.jimenez@tsjcdmx.gob.mx",
            'password'=> bcrypt('12345678'),
            'id_red'=> 2,
            'activo'=> 1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
    }
}
