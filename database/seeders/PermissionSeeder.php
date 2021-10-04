<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name' => "Admin",
            'description' => "Can do anything",
        ]);
        DB::table('permissions')->insert([
            'name' => "Editor",
            'description' => "Can do something",
        ]);
        DB::table('permissions')->insert([
            'name' => "User",
            'description' => "Can do nothing",
        ]);


    }
}
