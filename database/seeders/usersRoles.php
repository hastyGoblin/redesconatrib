<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usersRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usersRoles')->insert([
            'fk_usersroles'=>1,
            'fk_roles'=>1,
        ]);

        DB::table('usersRoles')->insert([
            'fk_usersroles'=>2,
            'fk_roles'=>1,
        ]);

        DB::table('usersRoles')->insert([
            'fk_usersroles'=>3,
            'fk_roles'=>2,
        ]);  

        DB::table('usersRoles')->insert([
            'fk_usersroles'=>4,
            'fk_roles'=>2,
        ]);  

        DB::table('usersRoles')->insert([
            'fk_usersroles'=>5,
            'fk_roles'=>2,
        ]);  
    }
}
