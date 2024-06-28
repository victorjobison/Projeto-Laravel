<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'administrador@gmail.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('12345678')

            ],
            [
                'name' => 'Funcionario',
                'email' => 'funcionario@gmail.com',
                'role' => 'editor',
                'status' => 'active',
                'password' => bcrypt('12345678')

            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('12345678')

            ],
        ]);
    }
}
