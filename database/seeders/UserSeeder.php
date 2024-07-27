<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(10)->create();

        DB::table('users')->insert([
            'name' => 'Naufal Parama Rafif',
            'username' => 'naufalparamarafif',
            'email' => 'naufalparamarafif@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        DB::table('users')->insert([
            'name' => 'Osama bin Laden',
            'username' => 'osamabinladen',
            'email' => 'osamabinladen@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('osamabinladen'),
            'remember_token' => Str::random(10),
        ]);
    }
}
