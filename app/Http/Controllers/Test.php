<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function genres()
    {
        return view('genres');
    }
    public function news()
    {
        return view('news');
    }
    public function trendy()
    {
        return view('trendy');
    }
    public function upcoming()
    {
        return view('upcoming');
    }
    public function welcome()
    {
        return view('welcome');
    }

}
