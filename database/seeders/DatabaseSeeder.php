<?php

namespace Database\Seeders;

use App\Models\Level;
use App\Models\LevelPermission;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            LevelSeeder::class,
            PermissionsSeeder::class,
            LevelPermissionSeeder::class,
//            \App\Models\User::factory(10)->create()
        ]);
    }
}
