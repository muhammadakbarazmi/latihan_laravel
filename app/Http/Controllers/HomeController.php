<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        return view('index');
    }

    public function products() 
    {
        return view('products');
    }

    public function services() 
    {
        return view('services');
    }

    public function galery() 
    {
        return view('gallery');
    }

    public function about() 
    {
        return view('about');
    }

    public function contact() 
    {
        return view('contact');
    }
}