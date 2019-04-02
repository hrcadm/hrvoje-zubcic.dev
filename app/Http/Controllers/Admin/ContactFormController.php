<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactFormController extends Controller
{
    /**
     * Show all Contact Form submissions
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showAllFormSubmissions()
    {
        $submissions = ContactForm::all();

        return view('admin.contactFormIndex', compact('submissions'));
    }

    /**
     * Show Contact Form Instance
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showInstance($id)
    {
        $submission = ContactForm::findOrFail($id);

        return view('admin.contactFormShow', compact('submission'));
    }
}
