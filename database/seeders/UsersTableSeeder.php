<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* creating admin user */
        $user=new User();
        $user->name="Admin";
        $user->email="admin@travelagency.com";
        $user->password=Hash::make('1122');
        $user->role_id=1; // admin
        $user->save();
        /* creating admin user */

        /* creating agent user */
        $user=new User();
        $user->name="Agent";
        $user->email="agent@travelagency.com";
        $user->password=Hash::make('1122');
        $user->role_id=2; // agent
        $user->save();
        /* creating agent user */
    }
}
