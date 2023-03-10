<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

Route::get('/', [PostController::class, 'index']);

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contacts"
    ]);
});