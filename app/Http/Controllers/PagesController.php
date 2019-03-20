<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function landingPage()
    {
        return view('web.mainPages.landingPage');
    }

    public function aboutMe()
    {
        return view('web.mainPages.about-me');
    }

    public function portfolio()
    {
        return view('web.portfolio.index');
    }

    public function blog()
    {
        return view('web.blog.index');
    }

    public function contact()
    {
        return view('web.mainPages.contact');
    }
}
