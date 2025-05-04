<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

class ProductController extends Controller
{
    public function newArrivals()
    {
        $products = Product::where('SubCategory', 'like', '%New Arrivals%')->get();
        return view('new-arrivals', ['products' => $products]);
    }

    public function fragrances()
    {
        $mens = Product::where('Category', 'fragrances')
                       ->where('SubCategory', 'mens')
                       ->get(['Name', 'Price', 'ImageUrl']);

        $ladies = Product::where('Category', 'fragrances')
                         ->where('SubCategory', 'ladies')
                         ->get(['Name', 'Price', 'ImageUrl']);

        return view('fragrances', compact('mens', 'ladies'));
    }
}
