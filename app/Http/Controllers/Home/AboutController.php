<?php

namespace laravelPractice\Http\Controllers\Home;

use Illuminate\Http\Request;
use laravelPractice\Http\Controllers\Controller;
use laravelPractice\Models\Website;
use laravelPractice\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $website = Website::find(1);
        $about = About::find(1);

        return view('home/about', compact('website', 'about'));
    }
}