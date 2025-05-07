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
    public function leatherGoods()
    {
        $shoulderBag = Product::where('Category', 'leather goods')
                            ->where('SubCategory', 'shoulder bags')
                            ->get(['Name', 'Price', 'ImageUrl']);

        $miniBags = Product::where('Category', 'leather goods')
                          ->where('SubCategory', 'minibags')
                          ->get(['Name', 'Price', 'ImageUrl']);

        $backpacks = Product::where('Category', 'leather goods')
                           ->where('SubCategory', 'backpacks')
                           ->get(['Name', 'Price', 'ImageUrl']);

        $wallets = Product::where('Category', 'leather goods')
                         ->where('SubCategory', 'wallets')
                         ->get(['Name', 'Price', 'ImageUrl']);

        return view('leather-goods', compact('shoulderBag', 'miniBags', 'backpacks', 'wallets'));
    }
    public function accessories()
    {
        $jewelleries = Product::where('Category', 'accessories')
                            ->where('SubCategory', 'jwelleries')
                            ->get(['Name', 'Price', 'ImageUrl']);

        $footwear = Product::where('Category', 'accessories')
                          ->where('SubCategory', 'footwear')
                          ->get(['Name', 'Price', 'ImageUrl']);

        return view('accessories', compact('jewelleries', 'footwear'));
    }
}
