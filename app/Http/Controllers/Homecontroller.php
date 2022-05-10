<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Homecontroller extends Controller
{
    public function index() {
        return view('home.index');
    }

    public function activiteiten() {
        return view('home.activiteiten');
    }

    public function blog() {
        return view('home.blog');
    }
}
 