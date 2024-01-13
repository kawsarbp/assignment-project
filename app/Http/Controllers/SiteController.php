<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('home/home');
    }
    public function about()
    {
        return view('about/about');
    }
    public function service()
    {
        return view('service/service');
    }
    public function contact()
    {
        return view('contact/contact');
    }
}
