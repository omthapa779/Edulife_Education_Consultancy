<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function aboutUs()
    {
        return view('aboutUs');
    }
    public function contact()
    {
        return view('contact');
    }
    public function study_abroad()
    {
        return view('study_abroad');
    }
    public function test_preperation()
    {
        return view('test_preperation');
    }
    public function courses()
    {
        return view('courses');
    }
    public function counselling()
    {
        return view('career_counselling');
    }

    //countries
    public function UK()
    {
        return view('UK');
    }
    public function USA()
    {
        return view('USA');
    }
    public function Canada()
    {
        return view('Canada');
    }
    public function Australia()
    {
        return view('Australia');
    }
    public function NewZealand()
    {
        return view('NewZealand');
    }

}
