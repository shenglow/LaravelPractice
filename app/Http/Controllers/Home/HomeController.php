<?php

namespace laravelPractice\Http\Controllers\Home;

use Illuminate\Http\Request;
use laravelPractice\Http\Controllers\Controller;
use laravelPractice\Models\Website;
use laravelPractice\Models\Home;

class HomeController extends Controller
{
    public function index()
    {
        $website = Website::find(1);
        $home = Home::find(1);

        return view('home/home', compact('website', 'home'));
    }
}