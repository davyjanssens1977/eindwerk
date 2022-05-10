<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Homecontroller::class, 'index'])->name('home.index');

Route::get('/home/activiteiten', [Homecontroller::class, 'activiteiten'])->name('home.activiteiten');

Route::get('/posts/index', [PostsController::class, 'index'])->name('posts.index');

Route::get('/contact/contact', [ContactController::class, 'contact'])->name('contact.contact');

 
//Register
Route::get('/register', [UserController::class, 'create']);

// Create new user
Route::post('/users', [UserController::class, 'store']);

// Log User out
Route::post('/logout', [UserController::class, 'logout']);

// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login');

// Login User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


// Profile edit
Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
Route::put('/profile/edit/email', [ProfileController::class, 'updateEmail'])->name('profile.update-email')->middleware('auth');
Route::put('/profile/edit/password', [ProfileController::class, 'updatePassword'])->name('profile.update-password')->middleware('auth');


// Blog
Route::get('/home/listings', function(){
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});


// single Listing
Route::get('/home/listings/{id}', function($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});


