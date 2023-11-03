<?php

namespace Database\Seeders;

use Carbon\Carbon;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_images')->insert([
            'img_file' => 'x1.jpg',
            'product_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => null
        ]);
        DB::table('product_images')->insert([
            'img_file' => '1.jpg',
            'product_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => null
        ]);
        DB::table('product_images')->insert([
            'img_file' => '2.jpg',
            'product_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => null
        ]);

        DB::table('product_images')->insert([
            'img_file' => 'x9.jpg',
            'product_id' => 2,'created_at' => Carbon::now(),
            'updated_at' => null
        ]);

        DB::table('product_images')->insert([
            'img_file' => 'x10.jpg',
            'product_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => null
        ]);

        DB::table('product_images')->insert([
            'img_file' => 'x4.jpg',
            'product_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => null
        ]);


        DB::table('product_images')->insert([
            'img_file' => 'x8.jpg',
            'product_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => null
        ]);
        DB::table('product_images')->insert([
            'img_file' => 'x7.jpg',
            'product_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => null
        ]);
        DB::table('product_images')->insert([
            'img_file' => 'x5.jpg',
            'product_id' => 7,
            'created_at' => Carbon::now(),
            'updated_at' => null
        ]);
        DB::table('product_images')->insert([
            'img_file' => 'x2.jpg',
            'product_id' => 8,
            'created_at' => Carbon::now(),
            'updated_at' => null
        ]);
        DB::table('product_images')->insert([
            'img_file' => 'x5.jpg',
            'product_id' => 9,
            'created_at' => Carbon::now(),
            'updated_at' => null
        ]);
        DB::table('product_images')->insert([
            'img_file' => 'x4.jpg',
            'product_id' => 10,
            'created_at' => Carbon::now(),
            'updated_at' => null
        ]);

        DB::table('product_images')->insert([
            'img_file' => 'x8.jpg',
            'product_id' => 11,
            'created_at' => Carbon::now(),
            'updated_at' => null
        ]);


    }
}
