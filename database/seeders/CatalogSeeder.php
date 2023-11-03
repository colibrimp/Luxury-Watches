<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('catalogs')->insert([
            'title' => "Women's fashion",
            'alias' => "Ladies Watch",
        ]);

        DB::table('catalogs')->insert([
            'title' => "Men's fashion",
            'alias' => "Mens Watch",
        ]);

        DB::table('catalogs')->insert([
            'title' => "Children's fashion",
            'alias' => "Kids Watch",
        ]);
    }
}
