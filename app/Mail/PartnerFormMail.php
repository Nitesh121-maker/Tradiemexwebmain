<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PartnerFormMail;

class PartnerFormController extends Controller
{
    public function PartnerForm(Request $request)
    {
        $validatedData = $request->validate([
            'fname'              => ['required', 'string'],
            'lname'              => ['required', 'string'],
            'email'              => ['required', 'email'],
            'phone'              => ['required', 'numeric'],
            'msg'                => ['required'],
            'apply'              => ['required'],
            'recaptcha_response' => ['required']
        ]);

        if ($request->fails()) {
            return redirect()->back()->with('error', 'Your message has not been sent, please check the form and try again!');
        }

        try {
            Mail::to('info@tradeimex.in')->send(new PartnerFormMail($validatedData));
            return redirect()->back()->with('success', 'Your message has been sent!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while sending your message. Please try again later.');
        }
    }
}
