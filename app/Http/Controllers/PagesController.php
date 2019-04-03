<?php

namespace App\Http\Controllers;

use App\Models\Project;
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
        $projects = Project::all();

        return view('web.portfolio.index', compact('projects'));
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
