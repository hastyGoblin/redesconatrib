<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class usuarioCoordinadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>"Coordinador",
            'apellido_paterno'=>"Pavon",
            'apellido_materno'=>"Rosales",
            'dependencia'=>"PDJCDMX",
            'fk_estado'=>1,
            'fk_estatus'=>2, //se modifico por el campo bandera
            'cargo'=>"Coordi",
            'numero_celular'=>"7292870740",
            'email'=>"Coordinador@prueba.com",
            'password'=>bcrypt('12345678'),
            'id_red'=>1,
            'activo'=>1,
        ]);

        DB::table('users')->insert([
            'name'=>"Usuario1",
            'apellido_paterno'=>"Gomez",
            'apellido_materno'=>"Perez",
            'dependencia'=>"PDJCDMX",
            'fk_estado'=>2,
            'fk_estatus'=>1,
            'cargo'=>"Supervisor",
            'numero_celular'=>"5521369745",
            'email'=>"Usuario1@prueba.com",
            'password'=>bcrypt('12345678'),
            'id_red'=>1,
            'activo'=>0,
        ]);

        DB::table('users')->insert([
            'name'=>"Usuario2",
            'apellido_paterno'=>"Gomez",
            'apellido_materno'=>"Perez",
            'dependencia'=>"PDJCDMX",
            'fk_estado'=>3,
            'fk_estatus'=>2,
            'cargo'=>"Supervisor",
            'numero_celular'=>"5521369745",
            'email'=>"Usuario2@prueba.com",
            'password'=>bcrypt('12345678'),
            'id_red'=>1,
            'activo'=>0,
        ]);

        DB::table('users')->insert([
            'name'=>"Usuario3",
            'apellido_paterno'=>"Gomez",
            'apellido_materno'=>"Perez",
            'dependencia'=>"PDJCDMX",
            'fk_estado'=>3,
            'fk_estatus'=>3,
            'cargo'=>"Supervisor",
            'numero_celular'=>"5521369745",
            'email'=>"Usuario3@prueba.com",
            'password'=>bcrypt('12345678'),
            'id_red'=>1,
            'activo'=>0,
        ]);

    }
}
