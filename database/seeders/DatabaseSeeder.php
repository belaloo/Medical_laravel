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
//        \App\Models\Clinic::factory(20)->create();
        \App\Models\Major::factory(1)->create();
        \App\Models\User::factory(1)->create();
//        \App\Models\ClinicMajor::factory(10)->create();
    }
}
