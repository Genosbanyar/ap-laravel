<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\postSeeder;
use Database\Seeders\userSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(20)->create();
    }
}
