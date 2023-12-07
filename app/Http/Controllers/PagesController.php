<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function aboutUs()
    {
        return view('aboutUs');
    }
    public function contactus()
    {
        return view('contactus');
    }
}
