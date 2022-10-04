<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(cat_redesconatrib_seeder::class);// \App\Models\User::factory(10)->create();
        $this->call(EntidadFederativa::class);
        //$this->call(userSeeder::class);
    }
}
