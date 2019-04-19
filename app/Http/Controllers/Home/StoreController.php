<?php

namespace laravelPractice\Http\Controllers\Home;

use Illuminate\Http\Request;
use laravelPractice\Http\Controllers\Controller;
use laravelPractice\Models\Website;
use laravelPractice\Models\About;
use laravelPractice\Models\Store;

class StoreController extends Controller
{
    public function index()
    {
        $website = Website::find(1);
        $about = About::find(1);
        $store = Store::find(1);

        return view('home/store', compact('website', 'about', 'store'));
    }
}