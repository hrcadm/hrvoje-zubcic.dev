<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    /**
     * List All Testimonials
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $testimonials = Testimonial::all();

        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show create Form for Testimonial
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        // Get last testimonial in desc order and increment by one for the
        // new one to auto populate the order field
        $lastEntry = Testimonial::orderBy('testimonial_order', 'desc')->first();
        $newEntry = $lastEntry->testimonial_order;
        $newEntry++;

        return view('admin.testimonials.create', compact('newEntry'));
    }

    /**
     * Show Edit form for Testimonial
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Show instance of Testimonial
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        return view('admin.testimonials.show', compact('testimonial'));
    }

    /**
     * Create new Testimonial
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'testimonialOrder' => 'required',
            'testimonialAuthorName' => 'required|min:3',
            'testimonialAuthorRole' => 'required',
            'testimonialContent' => 'required|min:3'
        ]);

        $new = new Testimonial();

        $new->testimonial_order = $request->get('testimonialOrder');
        $new->testimonial_author_name = $request->get('testimonialAuthorName');
        $new->testimonial_author_role = $request->get('testimonialAuthorRole');
        $new->testimonial_author_company = ($request->get('testimonialAuthorCompany')) ? $request->get('testimonialAuthorCompany') : null;
        $new->testimonial_note = ($request->get('testimonialNote')) ? $request->get('testimonialNote') : null;
        $new->testimonial_content = $request->get('testimonialContent');

        $new->save();

        return redirect()->route('adminAllTestimonials')->with('msg', 'successNewTestimonial');
    }

    /**
     * Update Testimonial
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'testimonialOrder' => 'required',
            'testimonialAuthorName' => 'required|min:3',
            'testimonialAuthorRole' => 'required',
            'testimonialContent' => 'required|min:3'
        ]);

        $update = Testimonial::findOrFail($id);

        $update->testimonial_order = $request->get('testimonialOrder');
        $update->testimonial_author_name = $request->get('testimonialAuthorName');
        $update->testimonial_author_role = $request->get('testimonialAuthorRole');
        $update->testimonial_author_company = ($request->get('testimonialAuthorCompany')) ? $request->get('testimonialAuthorCompany') : null;
        $update->testimonial_note = ($request->get('testimonialNote')) ? $request->get('testimonialNote') : null;
        $update->testimonial_content = $request->get('testimonialContent');

        $update->save();

        return redirect()->route('adminAllTestimonials')->with('msg', 'successUpdateTestimonial');
    }

    /**
     * Delete Testimonial
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $delete = Testimonial::findOrFail($id);
        $delete->delete();

        return redirect()->route('adminAllTestimonials')->with('msg', 'successDeleteTestimonial');
    }
}
