<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Rules\NoUrls;
use Illuminate\Validation\Rule;

class ContactFormController extends Controller
{
    //
    public function sendContactForm(Request $request)
    {
        $validatedData = $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'country_region'=> 'required',
            'number'  => 'required',
            'company' => 'required',
            'role'    => 'required',
            'message' => ['required', 'string', new NoUrls],
            'recaptcha_response' => 'required|recaptchav3:contact,0.5',
        ]);

        if ($validatedData) {
            # code...
            Mail::to('info@tradeimex.in')->send(new ContactFormMail($validatedData));

            return redirect()->route('thankyou')->with('success', 'Your message has been sent!');
        }
        else {
            return redirect()->back()->withErrors(['error' => 'Your message could not be sent. Please check the form fields and try again.']);
        }

    }
}
