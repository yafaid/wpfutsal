<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Tambahkan data dummy pengguna
       DB::table('users')->insert([
        'name' => 'John Doe',
        'username' => 'admin',
        'password' => Hash::make('123'),
        'role_id' => 1
    ]);

    DB::table('users')->insert([
        'name' => 'Jane Smith',
        'username' => '123123',
        'password' => Hash::make('123'),
        'role_id' => 2
    ]);

    DB::table('users')->insert([
        'name' => 'Zadah',
        'username' => 'admin2',
        'password' => Hash::make('123'),
        'role_id' => 1
    ]);

    }
}
