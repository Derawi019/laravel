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



        DB::table('categories')->insert([
            'name' => 'TV & Audios',
            'slug' => 'tv-audios',
            'parentId' => null,
            'created_at' => now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Smart Phones',
            'slug' => 'smart-phones',
            'parentId' => null,
            'created_at' => now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Smart Television',
            'slug' => 'smart-television',
            'parentId' => 1,
            'created_at' => now(),
        ]);
    }
}
