<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(5)->create();
         \App\Models\Admin::factory(5)->create();
         
         DB::table('admins')->insert([
            //Admin
            [
                'name' => 'Ngen It Super Admin',
                'username' => 'NGen-Super-Admin',
                'email' => 'ngenit@gmail.com',
                'password' => Hash::make('ngenitadmin'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
    
            ],
            
        ]);
         
    }
    
}
