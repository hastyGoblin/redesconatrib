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
            'id'=>1,
            'fk_usersroles'=>1,
            'fk_roles'=>1,
        ]);

        DB::table('usersRoles')->insert([
            'id'=>2,
            'fk_usersroles'=>2,
            'fk_roles'=>2,
        ]);  
    }
}
