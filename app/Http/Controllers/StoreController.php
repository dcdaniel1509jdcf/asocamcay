<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class StoreController extends Controller
{
    public function index()
    {
        $products =Product::all()->where('visible','1')->sortBy('name');
        return view('store.index', compact('products'));
    }
    public function show($slug)
    {
        $product =Product::where('slug',$slug)->first();
        return view('store.show', compact('product'));
    }
    public function getItems($slug)
    {
    $items = Product::where('slug',$slug)->first();
    return json_encode($items);
    }
    
}
