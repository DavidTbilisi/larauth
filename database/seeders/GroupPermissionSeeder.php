<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('group_permission')->insert([
            'group_id' => 1,
            'permission_id' => 1,
            'authroutes_id' => 7,
        ]);
        DB::table('group_permission')->insert([
            'group_id' => 1,
            'permission_id' => 2,
            'authroutes_id' => 7,
        ]);
        DB::table('group_permission')->insert([
            'group_id' => 1,
            'permission_id' => 3,
            'authroutes_id' => 7,
        ]);
    }
}
