<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();

        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        $lastEntry = Testimonial::orderBy('testimonial_order', 'desc')->first();
        $newEntry = $lastEntry->testimonial_order;
        $newEntry++;

        return view('admin.testimonials.create', compact('newEntry'));
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function show($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        return view('admin.testimonials.show', compact('testimonial'));
    }

    public function store()
    {
        return "bla";
    }

    public function update(Request $request, $id)
    {
        return "bla";
    }

    public function destroy()
    {
        dd("got");
    }
}
