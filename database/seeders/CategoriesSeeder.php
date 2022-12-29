<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {


            DB::table('categories')->insert([
                'name' => 'TV & Audios' . $i,
                'slug' => 'tv-audios' . $i,
                'created_at' => now(),
            ]);
        }
        DB::table('categories')->insert([
            'name' => 'Smart Phones',
            'slug' => 'smart-phones',
            'created_at' => now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Smart Television',
            'slug' => 'smart-television',
            'parent-id' => 1,
            'created_at' => now(),
        ]);
    }
}
