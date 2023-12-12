<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('welcome');});

//other pages
Route::get('/aboutUs', [PagesController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendContactForm'])->name('contact');

