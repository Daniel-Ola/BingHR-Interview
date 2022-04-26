<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::create([
            'title' => 'Super Admin',
            'description' => ''
        ]);

        Level::create([
            'title' => 'Admin'
        ]);

        Level::create([
            'title' => 'Employee'
        ]);

        Level::create([
            'title' => 'HR Admin'
        ]);
    }
}
