<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PartnerFormMail;
class PartnerFormController extends Controller
{
    //
    public function PartnerForm(Request $request){
        $validate = $request->validate([
            'fname'              => ['required', 'string'],
            'lname'              => ['required', 'string'],
            'email'              => ['required', 'email'],
            'phone'              => ['required','numeric'],
            'msg'                => ['required'],
            'apply'              => ['required'],
            'recaptcha_response' => ['required']
        ]);
        if ($validate) {
            # code...
            Mail::to('info@tradeimex.in')->send(new ContactFormMail($validatedData));
            return redirect()->back()->with('success', 'Your message has been sent!');
        } else {
            # code...
            return redirect()->back()->with('error', 'Your message has not been sent, please check the  form and try again!');
        }
        
    }
}
