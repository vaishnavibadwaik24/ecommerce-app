<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Super Admin',
                'email' => 'admin@admin.com',
                'phone' => '985654321',
                'password' => Hash::make('Admin@1234'),
                'role_id' => 1,
                'image'   => 'assets/img/default_user.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        User::insert($users);

    }
}
