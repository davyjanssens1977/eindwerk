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
            'opmerkingen' => 'required|min:50'
        ]);

        Mail::to('test@test.be')
        ->send(new ContactMessageSent($request->only(['naam', 'telefoonnummer', 'email', 'opmerkingen'])));

        return back()->with('status', 'Je bericht is verstuurd.');
    }
}
