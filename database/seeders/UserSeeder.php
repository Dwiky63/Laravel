<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::firstOrCreate(['role_name' => 'admin']);

        User::create([
            'name' => 'Admin iDev',
            'email' => 'admin@idev.com',
            'password' => Hash::make('password123'), // Selalu gunakan Hash untuk password
            'role_id' => $adminRole->id,
        ]);
    }
}
