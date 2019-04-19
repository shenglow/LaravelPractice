<?php

namespace laravelPractice\Http\Controllers\Home;

use Illuminate\Http\Request;
use laravelPractice\Http\Controllers\Controller;
use laravelPractice\Models\Website;
use laravelPractice\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $website = Website::find(1);
        $products = Product::orderBy('id')->get();

        return view('home/products', compact('website', 'products'));
    }
}