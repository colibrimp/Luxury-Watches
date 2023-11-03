<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            'title' => "Megalith",
            'alias' => "Watch Brand Megalith",
        ]);
        DB::table('brands')->insert([
            'title' => "GALLANT",
            'alias' => "Watch Brand GALLANT" ,
        ]);
        DB::table('brands')->insert([
            'title' => "Tommy Hilfiger",
            'alias' => "Watch Brand Tommy Hilfiger",
        ]);
        DB::table('brands')->insert([
            'title' => "BOSS",
            'alias' => "Watch Brand BOSS",
        ]);
        DB::table('brands')->insert([
            'title' => "Calvin Klein ",
            'alias' => "Watch Brand Calvin Klein",
        ]);
        DB::table('brands')->insert([
            'title' => "BALMAIN",
            'alias' => "Watch Brand BALMAIN",
        ]);
        DB::table('brands')->insert([
            'title' => "COLMI",
            'alias' => "Watch Brand COLMI",
        ]);
        DB::table('brands')->insert([
            'title' => "DIESEL",
            'alias' => "Watch Brand DIESEL",
        ]);
        DB::table('brands')->insert([
            'title' => "ORIENT",
            'alias' => "Watch Brand ORIENT",
        ]);
    }
}
