<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class User_cubesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_cubes')->insert([
            'user_id' => '1',
            'name' => 'Gan 11M PRO',
            'cube_type_id' => '1'
        ]);
        DB::table('user_cubes')->insert([
            'user_id' => '1',
            'name' => 'Valk 2',
            'cube_type_id' => '2'
        ]);
    }
}
