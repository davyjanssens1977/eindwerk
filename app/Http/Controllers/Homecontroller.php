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
        'heading' => 'Laatste Blogberichten',
        'listings' => Listing::all()
    ]);
   }

   public function listing($id) {
    return view('home.listing', [
        'listing' => Listing::find($id)
    ]);
   }

   
}
 