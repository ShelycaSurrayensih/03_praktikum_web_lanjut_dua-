<?php


// use App\Http\Controllers\ContacController;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
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


Route::get('/home', [IndexController::class, 'index'])->name('index.home');
Route::get('/about', [AboutController::class, 'about'])->name('index.about');
Route::get('/blog', [BlogController::class, 'blog'])->name('index.blog');
Route::resource('contact', ContactController::class);

