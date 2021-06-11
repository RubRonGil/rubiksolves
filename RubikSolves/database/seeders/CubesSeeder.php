<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CubesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cube_types')->insert([
            'name' => '3x3x3'
        ]);
        DB::table('cube_types')->insert([
            'name' => '2x2x2'
        ]);
    }
}
