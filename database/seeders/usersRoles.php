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
            'fk_roles'=>2,
        ]);

        DB::table('usersRoles')->insert([
            'fk_UsersRoles'=>4,
            'fk_roles'=>2,
        ]);

        DB::table('usersRoles')->insert([
            'fk_UsersRoles'=>5,
            'fk_roles'=>2,
        ]);
    }
}
