<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function landingPage()
    {
        return view('web.mainPages.landingPage');
    }

    public function aboutMe()
    {
        $testimonials = Testimonial::orderBy('testimonial_order', 'asc')->get();

        return view('web.mainPages.aboutMe', compact('testimonials'));
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
