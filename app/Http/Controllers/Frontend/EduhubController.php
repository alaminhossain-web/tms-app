<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EduhubController extends Controller
{
    public function home()
    {
        return view('front.home.home');
    }
    public function category()
    {
        return view('front.courses.category');
    }
    public function details()
    {
        return view('front.courses.details');
    }
}
