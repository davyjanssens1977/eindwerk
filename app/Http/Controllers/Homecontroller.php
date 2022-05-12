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

    public function privacybeleid() {
        return view('home.privacybeleid');
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

   // Show edit form 
   public function edit(Listing $listing) {
       return view('home.edit', ['listing' => $listing]);
   }


      // Update Blog
      public function update(Request $request, Listing $listing) {
        $formFields = $request->validate([
            'naam' => 'required',
            'titel' => 'required',
            'tags' => 'required',
            'bericht' => 'required'
        ]);

        if($request->hasFile('foto')) {
            $formFields['foto'] = $request->file('foto')->store('fotos', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Blogpost succesvol geupdate!');
   }


   // Delete blog
   public function destroy(Listing $listing){
        $listing->delete();
        return redirect('/home/listings')->with('message', 'Blog is succcesvol verwijderd');
   }

}
 