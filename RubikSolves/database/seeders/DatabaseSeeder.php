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
        $this->call(PermissionTableSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(CubesSeeder::class);
        $this->call(User_cubesSeeder::class);
        $this->call(ResolvesSeeder::class);
        $this->call(MarksSeeder::class);
    }
}
