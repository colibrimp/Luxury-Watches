<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'title' => 'Tommy Hilfiger',
            'price' => rand(200, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 1,
            'brand_id' => 3
        ]);

        DB::table('products')->insert([
            'title' =>'Megalith',
            'price' => rand(75, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 1,
            'brand_id' => 1
        ]);

        DB::table('products')->insert([
            'title' => 'GALLANT',
            'price' => rand(75, 500),  // цена от 75 до 500euro
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 2,
            'brand_id' => 2
        ]);


        DB::table('products')->insert([
            'title' => 'BOSS',
            'price' => rand(75, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 1,
            'brand_id' => 4
        ]);

        DB::table('products')->insert([
            'title' => 'Calvin Klein Posh',
            'price' => rand(75, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 1,
            'brand_id' => 5
        ]);

        DB::table('products')->insert([
            'title' => 'BALMAIN',
            'price' => rand(75, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 3,
            'brand_id' => 6
        ]);

        DB::table('products')->insert([
            'title' => 'COLMI',
            'price' => rand(50, 200),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 2,
            'brand_id' => 7
        ]);
        DB::table('products')->insert([
            'title' => 'ORIENT',
            'price' => rand(200, 600),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 2,
            'brand_id' => 9
        ]);

        DB::table('products')->insert([
            'title' => 'DIESEL',
            'price' => rand(75, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 1,
            'brand_id' => 8
        ]);

        DB::table('products')->insert([
            'title' => 'BALMAIN',
            'price' => rand(200, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 1,
            'brand_id' => 6
        ]);
        DB::table('products')->insert([
            'title' => 'BALMAIN',
            'price' => rand(200, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 1,
            'brand_id' => 6
        ]);
        DB::table('products')->insert([
            'title' => 'BALMAIN',
            'price' => rand(200, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 2,
            'brand_id' => 6
        ]);
        DB::table('products')->insert([
            'title' => 'BALMAIN',
            'price' => rand(75, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 2,
            'brand_id' => 6
        ]);
        DB::table('products')->insert([
            'title' => 'ORIENT',
            'price' => rand(200, 600),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 3,
            'brand_id' => 9
        ]);
        DB::table('products')->insert([
            'title' => 'ORIENT',
            'price' => rand(200, 600),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 2,
            'brand_id' => 9
        ]);
        DB::table('products')->insert([
            'title' => 'ORIENT',
            'price' => rand(200, 600),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 1,
            'brand_id' => 9
        ]);
        DB::table('products')->insert([
            'title' => 'DIESEL',
            'price' => rand(75, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 2,
            'brand_id' => 8
        ]);
        DB::table('products')->insert([
            'title' => 'DIESEL',
            'price' => rand(150, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 2,
            'brand_id' => 8
        ]);
        DB::table('products')->insert([
            'title' => 'Calvin Klein Posh',
            'price' => rand(200, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 1,
            'brand_id' => 5
        ]);
        DB::table('products')->insert([
            'title' => 'Calvin Klein Posh',
            'price' => rand(200, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 2,
            'brand_id' => 5
        ]);
        DB::table('products')->insert([
            'title' => 'GALLANT',
            'price' => rand(75, 400),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 2,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([
            'title' => 'GALLANT',
            'price' => rand(75, 400),  // цена от 75 до 500euro
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 2,
            'brand_id' => 2
        ]);
        DB::table('products')->insert([
            'title' => 'Tommy Hilfiger',
            'price' => rand(200, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 1,
            'brand_id' => 3
        ]);
        DB::table('products')->insert([
            'title' => 'Tommy Hilfiger',
            'price' => rand(200, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 2,
            'brand_id' => 3
        ]);
        DB::table('products')->insert([
            'title' => 'Tommy Hilfiger',
            'price' => rand(200, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 3,
            'brand_id' => 3
        ]);
        DB::table('products')->insert([
            'title' => 'Tommy Hilfiger',
            'price' => rand(200, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 2,
            'brand_id' => 3
        ]);
        DB::table('products')->insert([
            'title' =>'Megalith',
            'price' => rand(75, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 3,
            'brand_id' => 1
        ]);

        DB::table('products')->insert([
            'title' => 'GALLANT',
            'price' => rand(75, 500),  // цена от 75 до 500euro
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 2,
            'brand_id' => 2
        ]);


        DB::table('products')->insert([
            'title' => 'BOSS',
            'price' => rand(200, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 2,
            'brand_id' => 4
        ]);
        DB::table('products')->insert([
            'title' => 'BOSS',
            'price' => rand(200, 500),
            'in_stock' => 1,
            'description' => 'Product Description. The 46mm solid stainless steel or colored case features a crown-protector and bold bezel. The dial comes with fine "diamond" texture in various semi-gloss colors . Water resistant to 5 ATM /50 meters. Box Contains Watch, Presentation box, Watch Cushion, Guarantee.',
            'catalog_id' => 1,
            'brand_id' => 4
        ]);
    }
}
