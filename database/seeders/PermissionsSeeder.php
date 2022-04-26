<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'title' => 'read'
        ]);

        Permission::create([
            'title' => 'write'
        ]);

        Permission::create([
            'title' => 'delete'
        ]);

        Permission::create([
            'title' => 'update'
        ]);
    }
}
