<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PartnerFormMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\PartnersFormController;
class PartnersFormController extends Controller
{
    //
    public function PartnerForm(Request $request)
    {
        // try {
          
            $validate = $request->validate([
                'fname'              => ['required', 'string'],
                'lname'              => ['required', 'string'],
                'email'              => ['required', 'email'],
                'number'              => ['required', 'numeric'],
                'msg'                => ['required'],
                'apply'              => ['required'],
                'recaptcha_response' => ['required']
            ]);
    
            if ($validate) {  
                Mail::to('info@tradeimex.in')->send(new PartnerFormMail($validate));
                return redirect()->back()->with('success', 'Your message has been sent!');
            } else {
                return redirect()->back()->with('error', 'Your message has not been sent, please check the form and try again!');
            }
        // } catch (\Exception $e) {
        //     // Log the exception
        //     \Log::error('Error sending email: ' . $e->getMessage());
    
        //     // Redirect back with error message
        //     return redirect()->back()->with('error', 'An error occurred while sending your message. Please try again later.');
        // }
    }
}