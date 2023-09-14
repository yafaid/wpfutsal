<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('user_roles')->insert([
            ['name' => 'Administrator', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Murid', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Guru', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ortu', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
