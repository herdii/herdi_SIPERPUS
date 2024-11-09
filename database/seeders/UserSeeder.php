<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'pustakawan',
            'email' => 'pustakawanUnsur@unsur.ac.id',
        ])
        ->assignRole('mahasiswa')
        ->givePermissionTo(['edit_book','edit_user']);
        
         User::factory()->create([
            'name' => 'mahasiswa',
            'email' => 'mahasiswaUnsur@unsur.ac.id',
         ])
        ->assignRole('mahasiswa')
        ->givePermissionTo(['view_book']);
    }
    }


