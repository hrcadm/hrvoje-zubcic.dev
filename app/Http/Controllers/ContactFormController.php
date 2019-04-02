<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ContactFormController extends Controller
{
    public function contactFormSubmission(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'name' => 'required|min:3|max:100',
                'email' => 'required|email',
                'message' => 'required'
            ]
        );

        if($validator->fails())
        {
            return redirect()->back()->withInput(Input::all())->withErrors($validator, 'contactError');
        }

        $newEnquiry = new ContactForm();
        $newEnquiry->message_from = $request->name;
        $newEnquiry->message_email = $request->email;
        $newEnquiry->message_content = $request->message;
        $newEnquiry->save();

        return redirect()->back()->with('msg', 'successContact');
    }
}
