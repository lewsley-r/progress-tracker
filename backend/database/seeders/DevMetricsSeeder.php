<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DevMetricsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('metrics')->insert([
            ['name' => 'Navigate pattern', 'description' => 'Does the developer know how to navigate the pattern in all the Spryker modules?', 'categoryId' => 1],
            ['name' => 'Build pattern', 'description' => 'Does the developer know how to build the pattern in custom modules?', 'categoryId' => 1],
            ['name' => 'Override/extend pattern', 'description' => 'Does the developer know how to override and extend the pattern for custom functionality? (See => Overriding Spryker defaults)', 'categoryId' => 1],
            ['name' => 'Business Logic Modules', 'description' => 'Does the developer know how to use Mappers, Readers and other Business Logic Models?', 'categoryId' => 1],
            ['name' => 'Each layer', 'description' => 'Does the developer know what each layer is for?', 'categoryId' => 2],
            ['name' => 'Layer Interaction', 'description' => 'Does the developer know how the layers interact?', 'categoryId' => 2],
            ['name' => 'Why it works', 'description' => 'Does the developer know why the architecture works?', 'categoryId' => 2],
            ['name' => 'Value of Architeture pattern', 'description' => 'Does the developer know the value of the architectural pattern?', 'categoryId' => 2],
            ['name' => 'Build pattern into custom Zed', 'description' => 'Does the developer know how to build the pattern into a custom Zed module?', 'categoryId' => 2],
            ['name' => 'What each does', 'description' => 'Does the developer know what each service does?', 'categoryId' => 3],
            ['name' => 'Service Interaction', 'description' => 'Does the developer know how to make each service interact with the other?', 'categoryId' => 3],
            ['name' => 'Access Zed (backend gateway)', 'description' => 'Does the developer know how to access Zed via the Backend Gateway?', 'categoryId' => 3],
            ['name' => 'System + Code', 'description' => 'Does the developer know how the system and code architectures work in each service?', 'categoryId' => 3],
            ['name' => 'Using the system', 'description' => 'Does the developer know how to use the system?', 'categoryId' => 4],
            ['name' => 'Why use the system', 'description' => 'Does the developer know why we use the system?', 'categoryId' => 4],
            ['name' => 'What and bug prevention', 'description' => 'Does the developer know what DTOs are, and why they help prevent bugs?', 'categoryId' => 4],
            ['name' => 'Persistance Layer', 'description' => 'Does the developer know how to use Propel in the Persistence Layer?', 'categoryId' => 4],
            ['name' => 'Build Repositary (Persistance Layer)', 'description' => 'Does the developer know how to build a Repository in the Persistence Layer?', 'categoryId' => 4],
            ['name' => 'Why Respositories', 'description' => 'Does the developer know why we use Repositories?', 'categoryId' => 4],
            ['name' => 'Entities', 'description' => 'Does the developer know what Entities are and what they are used for?', 'categoryId' => 4],
            ['name' => 'Default dependencies/configs (O,E)', 'description' => 'Does the developer know how to override and extend default Spryker dependencies and configs?', 'categoryId' => 5],
            ['name' => 'Propel Entities (E )', 'description' => 'Does the developer know how to extend Propel Entities?', 'categoryId' => 5],
            ['name' => 'Core table definitions (E )', 'description' => 'Does the developer know how to extend core table definitions?', 'categoryId' => 5],
            ['name' => 'DTOs (E )', 'description' => 'Does the developer know how to extend DTOs?', 'categoryId' => 5],
            ['name' => 'What used for', 'description' => 'Does the developer know what middleware is used for?', 'categoryId' => 7],
            ['name' => 'Create custom module', 'description' => 'Does the developer know how to create a custom middleware module?', 'categoryId' => 7],
            ['name' => 'Allow system commands (wire up)', 'description' => 'Does the developer know how to wire up the system to allow for custom console commands?', 'categoryId' => 7],
            ['name' => 'Dataflow', 'description' => 'Does the developer know the dataflow inside middleware?', 'categoryId' => 7],
            ['name' => 'Handling different input formats', 'description' => 'Does the developer know how to handle different input formats?', 'categoryId' => 7],
            ['name' => 'Handling different output formats', 'description' => 'Does the developer know how to handle different output formats?', 'categoryId' => 7],
            ['name' => 'Writing pipeline data (persistance layer)', 'description' => 'Does the developer know how to write pipeline data to the persistence layer?', 'categoryId' => 7],
            ['name' => 'Setup custom data imports', 'description' => 'Does the developer know how to set up custom data imports?', 'categoryId' => 8],
            ['name' => 'Plug in events system', 'description' => 'Does the developer know how to plug in the events system to send imported data to the stores?', 'categoryId' => 8],
            ['name' => 'Propel Entities (persistence)', 'description' => 'Does the developer know how to use Propel Entities to manage persistence during import?', 'categoryId' => 8],
            ['name' => 'Create custom console importer command (wire up)', 'description' => 'Does the developer know how to wire up all the code required for creating a custom console importer command', 'categoryId' => 8],
            ['name' => 'How and why this works', 'description' => 'Does the developer know how this system works and why?', 'categoryId' => 9],
            ['name' => 'Data setup for P&S', 'description' => 'Does the developer know how to set up custom data for P&S?', 'categoryId' => 9],
            ['name' => 'Stores used and why', 'description' => 'Does the developer know what stores we use and why?', 'categoryId' => 9],
            ['name' => 'System used for each Gluepoint', 'description' => 'Does the developer know what system might be used for each Glue Endpoint, based on the data being requested?', 'categoryId' => 9],
            ['name' => 'System used for each Gluepoint', 'description' => 'Create a GlueAPI module from scratch =>  https://thecustomerbureau.atlassian.net/wiki/spaces/TCB/pages/3117383681/Extend+the+Glue+Api ', 'categoryId' => 11],
            ['name' => 'System used for each Gluepoint', 'description' => 'Create a Middleware from scratch: https://thecustomerbureau.atlassian.net/wiki/spaces/TCB/pages/2951446538/Bonus+Task+-+Middleware  ', 'categoryId' => 12],

        ]);
    }
}
