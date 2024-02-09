<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CareerFormMail;
class CareerFormController extends Controller
{
    //
    public function sendCareerApplication(Request $request)
    {
        try {
            // Validate the form data
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'number' => 'required',
                'dob' => 'required|date',
                'position' => 'required',
                'cv' => 'required|file|mimes:pdf',
                'recaptcha_response'=>'required',
            ]);
             
            // Get the CV file content
            $cvContent = $request->file('cv')->get();
          
            // Send email with career application data and CV attachment
            Mail::to('info@tradeimex.in')->send(new CareerFormMail($validatedData, $cvContent));
       
            // Redirect back with success message
            return redirect()->back()->with('success', 'Your application has been submitted.');
        } catch (\Exception $e) {
            // Log the error
          
    
            // Redirect back with error message
            return redirect()->back()->with('error', 'There was an error submitting your application. Please try again later.');
        }
    }
}
