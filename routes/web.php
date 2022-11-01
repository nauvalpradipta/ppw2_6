<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Http\Controllers\SendEmailController;

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

Auth::routes([
    'reset' => false,
    ]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/send-email',function(){
    $data = [
    'name' => 'Nama Anda',
    'body' => 'Testing Kirim Email'
    ];
    Mail::to('nauvalpradipta2@gmail.com')->send(new SendEmail($data));
    dd("Email Berhasil dikirim.");
    });

Route::get('/send-email', [SendEmailController::class, 'index'])->name('kirim-email');
Route::post('/post-email', [SendEmailController::class, 'store'])->name('post-email');