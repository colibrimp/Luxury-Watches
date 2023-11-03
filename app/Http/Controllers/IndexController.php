<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function index()
   {
       $products = Product::orderBy('created_at')->take(4)->get();
       return view('main.main_page', [
           'products' => $products,

       ]);

   }

   public function search(Request $request)
   {
       $search = $request->search;
       $request->validate([
           'search' => 'required'
       ]);
       $products = Product::where('title', 'LIKE', "%{$search}%")->paginate(8);
       return view('product.search', compact('products'));
   }

}
