<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

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

Route::get('/home/blog', [Homecontroller::class, 'blog'])->name('home.blog');



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