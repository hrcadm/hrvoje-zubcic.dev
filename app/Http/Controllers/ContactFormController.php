<?php

namespace App\Http\Controllers;

use App\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function contactFormSubmission(Request $request)
    {
        dd($request->all());
    }
}
