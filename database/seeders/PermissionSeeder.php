<?php

namespace Database\Seeders;

use App\Models\permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        permission::create(['name'=>'edit_book']);
        Permission::create(['name'=>'edit_user']);
        Permission::create(['name'=>'view_book']);
    }
}
