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
        //Reunión de la Red de Cooperación para la Protección de la Niñez
        DB::table('users')->insert([
            'name'=>"EMANUEL",
            'apellido_paterno'=>"VELASCO",
            'apellido_materno'=>"LÓPEZ",
            'dependencia'=>"PDJCDMX",
            'fk_estado'=>10,
            'fk_estatus'=>2,
            'cargo'=>"Coordinador1",
            'numero_celular'=>"7292870740",
            'email'=>"emanuel.velasco@tsjcdmx.gob.mx",
            'password'=>bcrypt('12345678'),
            'id_red'=>1,
            'activo'=>1,
        ]);
        DB::table('users')->insert([
            'name'=>"GABRIELA",
            'apellido_paterno'=>"HERNÁNDEZ",
            'apellido_materno'=>"VÁZQUEZ",
            'dependencia'=>"PDJCDMX",
            'fk_estado'=>10,
            'fk_estatus'=>2,
            'cargo'=>"Coordinador2",
            'numero_celular'=>"7292870740",
            'email'=>"gabriela.vazquez@tsjcdmx.gob.mx",
            'password'=>bcrypt('12345678'),
            'id_red'=>1,
            'activo'=>1,
        ]);
        DB::table('users')->insert([
            'name'=>"MARTHA",
            'apellido_paterno'=>"BAUTISTA",
            'apellido_materno'=>"MORALES",
            'dependencia'=>"PDJCDMX",
            'fk_estado'=>10,
            'fk_estatus'=>2,
            'cargo'=>"Coordinador3",
            'numero_celular'=>"7292870740",
            'email'=>"gmartha.morales@tsjcdmx.gob.mx",
            'password'=>bcrypt('12345678'),
            'id_red'=>1,
            'activo'=>1,
        ]);

        //Reunión de la Red Nacional de Estadísticas Judiciales
        DB::table('users')->insert([
            'name'=>"LEIDI",
            'apellido_paterno'=>"VALDEZ",
            'apellido_materno'=>"ENRÍQUEZ",
            'dependencia'=>"PDJCDMX",
            'fk_estado'=>10,
            'fk_estatus'=>2,
            'cargo'=>"Coordinador1",
            'numero_celular'=>"5521369745",
            'email'=>"leidi.valdez@tsjcdmx.gob.mx",
            'password'=>bcrypt('12345678'),
            'id_red'=>2,
            'activo'=>1,
        ]);
        DB::table('users')->insert([
            'name'=>"FERNANDA",
            'apellido_paterno'=>"BENITEZ",
            'apellido_materno'=>"BENITEZ",
            'dependencia'=>"PDJCDMX",
            'fk_estado'=>10,
            'fk_estatus'=>2,
            'cargo'=>"Coordinador2",
            'numero_celular'=>"5521369745",
            'email'=>"fernanda.benitez@tsjcdmx.gob.mx",
            'password'=>bcrypt('12345678'),
            'id_red'=>2,
            'activo'=>1,
        ]);

        //Reunión de la Red de Escuelas Judiciales de los Estados de los Estados de la República Mexicana
        DB::table('users')->insert([
            'name'=>"MÓNICA ROCÍO",
            'apellido_paterno'=>"FARFÁN",
            'apellido_materno'=>"GARCÍA",
            'dependencia'=>"PDJCDMX",
            'fk_estado'=>10,
            'fk_estatus'=>2,
            'cargo'=>"Coordinador1",
            'numero_celular'=>"5521369745",
            'email'=>"monica.farfan@tsjcdmx.gob.mx",
            'password'=>bcrypt('12345678'),
            'id_red'=>4,
            'activo'=>1,
        ]);
        DB::table('users')->insert([
            'name'=>"ANGELA",
            'apellido_paterno'=>"SÁNCHEZ",
            'apellido_materno'=>"GARCÍA",
            'dependencia'=>"PDJCDMX",
            'fk_estado'=>10,
            'fk_estatus'=>2,
            'cargo'=>"Coordinador2",
            'numero_celular'=>"5521369745",
            'email'=>"angela.sanchez@tsjcmx.gob.mx",
            'password'=>bcrypt('12345678'),
            'id_red'=>4,
            'activo'=>1,
        ]);

        //Reunión de la Red de Mecanismos Alternativos de Solución de Controversias
        DB::table('users')->insert([
            'name'=>"CARMEN JULIA",
            'apellido_paterno'=>"REYES",
            'apellido_materno'=>"MONTALVO",
            'dependencia'=>"PDJCDMX",
            'fk_estado'=>10,
            'fk_estatus'=>2,
            'cargo'=>"Coordinador1",
            'numero_celular'=>"5521369745",
            'email'=>"carmen.reyes@tsjcdmx.gob.mx",
            'password'=>bcrypt('12345678'),
            'id_red'=>5,
            'activo'=>1,
        ]);
        DB::table('users')->insert([
            'name'=>"JULIA VALERIA",
            'apellido_paterno'=>"GUERRA",
            'apellido_materno'=>"FLORES",
            'dependencia'=>"PDJCDMX",
            'fk_estado'=>10,
            'fk_estatus'=>2,
            'cargo'=>"Coordinador2",
            'numero_celular'=>"5521369745",
            'email'=>"julia.guerra@tsjcdmx.gob.mx",
            'password'=>bcrypt('12345678'),
            'id_red'=>5,
            'activo'=>1,
        ]);

        //Reunión de la Red de Centros de Convivencias Familiar Supervisada
        DB::table('users')->insert([
            'name'=>"RAFAEL",
            'apellido_paterno'=>"ALEGRÍA",
            'apellido_materno'=>"LECONA",
            'dependencia'=>"PDJCDMX",
            'fk_estado'=>10,
            'fk_estatus'=>2,
            'cargo'=>"Coordinador1",
            'numero_celular'=>"5521369745",
            'email'=>"rafael.alegria@tsjcdmx.gob.mx",
            'password'=>bcrypt('12345678'),
            'id_red'=>6,
            'activo'=>1,
        ]);

        //Red Nacional de Archivos Judiciales 
        DB::table('users')->insert([
            'name'=>"DANYA",
            'apellido_paterno'=>"GUILLÉN",
            'apellido_materno'=>"RODRÍGUEZ",
            'dependencia'=>"PDJCDMX",
            'fk_estado'=>10,
            'fk_estatus'=>2,
            'cargo'=>"Coordinador1",
            'numero_celular'=>"5521369745",
            'email'=>"danya.guillen@tsjcdmx.gob.mx",
            'password'=>bcrypt('12345678'),
            'id_red'=>9,
            'activo'=>1,
        ]);

    }
}
