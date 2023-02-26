<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.about');
    }

    public function contacts()
    {
        return view('home.contacts');
    }

    public function services()
    {
        return view('home.services');
    }

    public function projects()
    {
        return view('home.projects');
    }
    
    public function products()
    {
        return view('home.products');
    }

    //
}
