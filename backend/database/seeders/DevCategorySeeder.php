<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DevCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'CORE - CODE ARCHITECHTURE',
                'roleId' => '4', //This is the roleId for developers 
                'created_at' =>   now(),
            ],
            [
                'name' => 'CORE - SYSTEM ARCHITECTURE',
                'roleId' => '4',
                'created_at' =>   now(),
            ],
            [
                'name' => 'CORE - SERVICE ARCHITECTURE',
                'roleId' => '4',
                'created_at' =>   now(),
            ],
            [
                'name' => 'CORE - PROPEL/DTO SYSTEM',
                'roleId' => '4',
                'created_at' =>   now(),
            ],
            [
                'name' => 'CORE - OVERRIDING/EXTENDING',
                'roleId' => '4',
                'created_at' =>   now(),
            ],
            [
                'name' => 'SPECIALISM - GLUE API',
                'roleId' => '4',
                'created_at' =>   now(),
            ],
            [
                'name' => 'SPECIALISM - MIDDLEWARE',
                'roleId' => '4',
                'created_at' =>   now(),
            ],
            [
                'name' => 'SPECIALISM - DATA IMPORTERS',
                'roleId' => '4',
                'created_at' =>   now(),
            ],
            [
                'name' => 'SPECIALISM - PUBLISH SYNC',
                'roleId' => '4',
                'created_at' =>   now(),
            ],
            [
                'name' => 'SPECIALISM - DOCKER SDK',
                'roleId' => '4',
                'created_at' =>   now(),
            ],
            [
                'name' => 'EXERCISE - GLUE API',
                'roleId' => '4',
                'created_at' =>   now(),
            ],
            [
                'name' => 'EXERCISE - MIDDLEWARE',
                'roleId' => '4',
                'created_at' =>   now(),
            ],
        ]);
    }
}





