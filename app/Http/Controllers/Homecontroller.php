<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;


class Homecontroller extends Controller
{
    public function index() {
        return view('home.index');
    }

    public function activiteiten() {
        return view('home.activiteiten');
    }

   public function listings() {
    return view('home.listings', [
        'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
    ]);
   }

   //Show Form
   public function create() {
       return view('home.create');
   }

   // Store Blog
   public function store(Request $request) {
        $formFields = $request->validate([
            'naam' => 'required',
            'titel' => 'required',
            'tags' => 'required',
            'bericht' => 'required'
        ]);

        if($request->hasFile('foto')) {
            $formFields['foto'] = $request->file('foto')->store('fotos', 'public');
        }

        Listing::create($formFields);

        return redirect('/home/listings')->with('message', 'Blogpost succesvol toegevoegd!');
   }

}
 