<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public  function showProduct($catalog, $product_id)
    {
        $item = Product::where('id', $product_id)->first();
        $products = Product::orderBy('price','desc')->take(3)->get();
        return view('product.show_product', [
            'item' => $item,
            'products' => $products
        ]);

    }
    public function showCatalog($catalog_alias)
    {
        $catalog = Catalog::where('alias', $catalog_alias)->first();
        $products = Product::orderBy('created_at')->take(3)->get();
        return view('catalog.index', [
            'catalog' => $catalog,
            'products' => $products
        ]);
    }

    public function showBrand($brand_alias)
    {
        $brand = Brand::where('alias', $brand_alias)->first();
        $products = Product::orderBy('created_at')->take(3)->get();
        return view('brand.index',[
            'brand' => $brand,
            'products' => $products
        ]);
    }

}
