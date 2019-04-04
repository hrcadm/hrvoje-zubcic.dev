<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Testimonial;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesController extends Controller
{
    /**
     * Display Landing Page
     *
     * @return Factory|View
     */
    public function landingPage()
    {
        return view('web.mainPages.landingPage');
    }

    /**
     * Display About Me view
     *
     * @return Factory|View
     */
    public function aboutMe()
    {
        $testimonials = Testimonial::orderBy('testimonial_order', 'asc')->get();

        return view('web.mainPages.aboutMe', compact('testimonials'));
    }

    /**
     * Display Portfolio Projects
     *
     * @return Factory|View
     */
    public function portfolio()
    {
        $projects = Project::all();
        $featuredProject = $projects->where('featured', '=', 1)->first();

        return view('web.portfolio.index', compact('projects', 'featuredProject'));
    }

    /**
     * Display Single Project Details
     *
     * @param $title
     * @return Factory|View
     */
    public function portfolioSingle($title)
    {
        $project = Project::where('title', '=', $title)->first();

        return view('web.portfolio.portfolioSingle', compact('project'));
    }

    /**
     * Display Blog Posts
     *
     * @return Factory|View
     */
    public function blog()
    {
        return view('web.blog.index');
    }

    /**
     * Display Contact Page view
     *
     * @return Factory|View
     */
    public function contact()
    {
        return view('web.mainPages.contact');
    }
}
