<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('posts', 'App\Http\Controllers\PostController');

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Nauval Pradipta",
        "image" => "logo_nauval.jpg"
    ]);
});

Route::get('/education', function () {
    return view('education', [
        "title" => "Education",
        "school" => "SMK Negeri 7 Semarang",
        "college" => "Universitas Gadjah Mada",
        "major" => "TRPL"
    ]);
});