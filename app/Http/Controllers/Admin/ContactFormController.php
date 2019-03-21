<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactFormController extends Controller
{
    public function showAllFormSubmissions()
    {
        $submissions = ContactForm::all();

        return view('admin.contactFormIndex', compact('submissions'));
    }
}
