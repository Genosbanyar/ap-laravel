<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
            'name' => Str::random(10),
            'description' => Str::random(100),
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
