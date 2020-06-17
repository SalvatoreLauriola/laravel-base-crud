<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mobile;

class HomeController extends Controller
{
    public function index()
    {
        $mobiles = Mobile::all();

        return view('home', compact('mobiles'));
    }
}
