<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMessageSent;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact() {
        return view('contact.contact');
    }
    
    public function verzenden(Request $request) {
        $request->validate([
            'naam' => 'required',
            'telefoonnummer' => 'required',
            'email' => 'required|email',
            'opmerking' => 'required|min:20'
        ]);

        Mail::to('info@vzw-wiebe-bree.be')
        ->send(new ContactMessageSent($request->only(['naam', 'telefoonnummer', 'email', 'opmerking'])));

        return back()->with('status', 'Uw bericht is succesvol verzonden!');
    }

    public function contactSubmit(Request $request)
 {
    return "Formulier is succesvol verzonden";
 }

}
