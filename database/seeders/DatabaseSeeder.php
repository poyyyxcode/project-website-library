<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Buku;
use App\Models\Penulis;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $this->call([
            UserSeeder::class,
            BukuSeeder::class,
            PenulisSeeder::class,
        ]);
        $penulisAndBukuId = [[1, 1], [1,2], [2,3], [3,4], [4,5]];
        foreach($penulisAndBukuId as $i) {
            DB::table('penulis_buku')->insert([
                'penulis_id' => $i[0],
                'buku_id' => $i[1]
            ]);
        }
    }
}
