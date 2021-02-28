<?php

<<<<<<< HEAD
// use App\Http\Controllers\ContacController;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
=======
>>>>>>> a846894effc441ebf5b68663d1cb34bea0c8cf7a
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\WelcomeController;
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

<<<<<<< HEAD
// Route::get('/hello', function () {
//     return "Hello World";
// });

// Route::get('mahasiswa', function ($id) {
// });
// Route::post('mahasiswa', function ($id) {
// });
// Route::put('mahasiswa', function ($id) {
// });
// Route::delete('mahasiswa', function ($id) {
// });
// Route::get('mahasiswa/{id}', function ($id) {
// });
// Route::put('mahasiswa/{id}', function ($id) {
// });
// Route::delete('mahasiswa/{id}', function ($id) {
// });

// Route::get('/hello', [WelcomeController::class,'hello']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'home']);

// Route::get('/home', function () {
//     return view('home');
// });

// Route::prefix('game')->group(function(){
//     Route::get('/list-game', function () {
//         return view('product');
//     });
// });

// Route::get('news', function () {
//     return view('news', ['news' => 'news','topic' => 'educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19']);
// });

// Route::prefix('program')->group(function(){
//     Route::get('/daftar-program', function () {
//         return view('program');
//     });
// });

// Route::get('/about-us', function () {
//     return view('about-us');
// });

// // Route::resource('/contact-us', view('contact-us'));

// Route::resource('contact', ContacController::class);

Route::get('/home', [IndexController::class, 'index'])->name('index.home');
Route::get('/about', [AboutController::class, 'about'])->name('index.about');
Route::get('/blog', [BlogController::class, 'blog'])->name('index.blog');
Route::resource('contact', ContactController::class);
=======
Route::get('/', function () {
    echo "Selamat datang";
});

Route::get('/about', function () {
    echo "1941720031 , Muhammad Auful Kirom";
});

Route::get('/articles/{id}', function ($id) {
    echo "Halaman artikel dengan id ".$id;
});
>>>>>>> a846894effc441ebf5b68663d1cb34bea0c8cf7a
