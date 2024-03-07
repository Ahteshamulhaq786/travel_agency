<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['admin','agent']; // must be unqiue
        foreach($roles as $rol_name){
            $role=new Role();
            $role->role_name=$rol_name;
            $role->save();
        }
    }
}
