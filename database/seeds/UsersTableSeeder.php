<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => "Admin Adminov",
            'email' => "admin@abv.bg",
            'password' => Hash::make("123456"),
        ])->assignRole(['admin', 'user']);

        User::create([
            'name' => "Pesho Peshev",
            'email' => "pesho@abv.bg",
            'password' => Hash::make("123456"),
        ])->assignRole('user');
    }
}
