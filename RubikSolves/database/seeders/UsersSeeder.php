<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'name' => 'Rubén', 
        	'surname' => 'Rondán Gil', 
        	'nickname' => 'Rubo', 
        	'email' => 'admin@admin.com',
        	'password' => bcrypt('123')
        ]);
        
        $role = Role::create(['name' => 'Admin']);
        
        $permissions = Permission::pluck('id')->all();
        
        $role->syncPermissions($permissions);
        
        $user->assignRole([$role->id]);
        
        $user2 = User::create([
        	'name' => 'Diego', 
        	'surname' => 'García Losada', 
        	'nickname' => 'Digl', 
        	'email' => 'digl@digl.com',
        	'password' => bcrypt('123')
        ]);
    }
}
