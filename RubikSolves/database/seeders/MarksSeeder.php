<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MarksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marks')->insert([
            'resolve_id' => 1,
            'milisec' => 45000
        ]);
        DB::table('marks')->insert([
            'resolve_id' => 1,
            'milisec' => 33000
        ]);
        DB::table('marks')->insert([
            'resolve_id' => 1,
            'milisec' => 50000
        ]);
        DB::table('marks')->insert([
            'resolve_id' => 1,
            'milisec' => 12000
        ]);
        DB::table('marks')->insert([
            'resolve_id' => 1,
            'milisec' => 22000
        ]);
    }
}
