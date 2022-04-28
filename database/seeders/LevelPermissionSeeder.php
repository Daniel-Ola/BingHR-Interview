<?php

namespace Database\Seeders;

use App\Models\LevelPermission;
use Illuminate\Database\Seeder;

class LevelPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // superadmin
        LevelPermission::create([
           'level_id' => 1,
           'permission_id' => 1
        ]);
        LevelPermission::create([
           'level_id' => 1,
           'permission_id' => 2
        ]);
        LevelPermission::create([
           'level_id' => 1,
           'permission_id' => 3
        ]);
        //admin
        LevelPermission::create([
            'level_id' => 2,
            'permission_id' => 1
        ]);
        //employee
        LevelPermission::create([
            'level_id' => 3,
            'permission_id' => 1
        ]);
        // hradmin
        LevelPermission::create([
            'level_id' => 4,
            'permission_id' => 1
        ]);
        LevelPermission::create([
            'level_id' => 4,
            'permission_id' => 2
        ]);
        LevelPermission::create([
            'level_id' => 4,
            'permission_id' => 3
        ]);
    }
}
