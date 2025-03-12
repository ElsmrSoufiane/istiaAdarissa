<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'description' => 'responsable du group 203',
            'login' => 'admin1',
            'password' => Hash::make('p2'),
            'image' => 'admin.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
    
}
