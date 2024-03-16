<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'Admin',
                'created_at' =>   now(),
            ],
            [
                'name' => 'Product Owner',
                'created_at' =>   now(),
            ],
            [
                'name' => 'Product Manager',
                'created_at' =>   now(),
            ],
            [
                'name' => 'Developer',
                'created_at' =>   now(),
            ],
            [
                'name' => 'Team Leader',
                'created_at' =>   now(),
            ],
            [
                'name' => 'Other',
                'created_at' =>   now(),
            ]
        ]);
    }
}
