<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
{
   // Urutan: Role dulu, lalu User, baru News (karena News butuh UserID)
   $this->call([
       RoleSeeder::class,
       UserSeeder::class,
       NewsSeeder::class,
   ]);
}
}
