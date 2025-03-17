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
            'name' => 'soufiane lasmar',
            'description' => 'responsable du group 203',
            'login' => 'admin1',
            'password' => Hash::make('p2'),
            'image' => 'https://www.pngall.com/wp-content/uploads/5/Profile.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('groupes')->insert([
            ['name' => 'dev1','name' => 'tout les groupes',
            'created_at' => now(),
            'updated_at' => now()],
            ['name' => 'dev2',
            'created_at' => now(),
            'updated_at' => now()],
            ['name' => 'dev3',
            'created_at' => now(),
            'updated_at' => now()]
            
        ]);
    }
    
}
