<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Sys Admin',
            'email' => 'admin@admin.com',
            'roleId' => '1',
            'email_verified_at' => now(),
            'password' => Hash::make('xpAdmin'), // password
            'remember_token' => Str::random(10),
        ]);
    }
}
