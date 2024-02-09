<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
class ContactFormController extends Controller
{
    //
    public function sendContactForm(Request $request)
    {
        $validatedData = $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'number'  => 'required',
            'company' => 'required',
            'role'    => 'required',
            'message' => 'required',
        ]);

        Mail::to('info@tradeimex.in')->send(new ContactFormMail($validatedData));

        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}
