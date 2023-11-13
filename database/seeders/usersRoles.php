<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Reunión de la Red de Cooperación para la Protección de la Niñez
        DB::table('usersRoles')->insert([
            'fk_UsersRoles'=>1,
            'fk_roles'=>1,
        ]);
        DB::table('usersRoles')->insert([
            'fk_UsersRoles'=>2,
            'fk_roles'=>1,
        ]);
        DB::table('usersRoles')->insert([
            'fk_UsersRoles'=>3,
            'fk_roles'=>1,
        ]);

        //Reunión de la Red Nacional de Estadísticas Judiciales
        DB::table('usersRoles')->insert([
            'fk_UsersRoles'=>4,
            'fk_roles'=>1,
        ]);
        DB::table('usersRoles')->insert([
            'fk_UsersRoles'=>5,
            'fk_roles'=>1,
        ]);

        //Reunión de la Red de Escuelas Judiciales de los Estados de los Estados de la República Mexicana
        DB::table('usersRoles')->insert([
            'fk_UsersRoles'=>6,
            'fk_roles'=>1,
        ]);
        DB::table('usersRoles')->insert([
            'fk_UsersRoles'=>7,
            'fk_roles'=>1,
        ]);

        //Reunión de la Red de Mecanismos Alternativos de Solución de Controversias
        DB::table('usersRoles')->insert([
            'fk_UsersRoles'=>8,
            'fk_roles'=>1,
        ]);
        DB::table('usersRoles')->insert([
            'fk_UsersRoles'=>9,
            'fk_roles'=>1,
        ]);

        //Reunión de la Red de Centros de Convivencias Familiar Supervisada
        DB::table('usersRoles')->insert([
            'fk_UsersRoles'=>10,
            'fk_roles'=>1,
        ]);

        //Red Nacional de Archivos Judiciales 
        DB::table('usersRoles')->insert([
            'fk_UsersRoles'=>11,
            'fk_roles'=>1,
        ]);

    }
}
