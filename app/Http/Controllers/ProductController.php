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
}
