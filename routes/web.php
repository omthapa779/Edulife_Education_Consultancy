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

Route::get('/study_abroad', [PagesController::class, 'study_abroad'])->name('study_abroad');
Route::get('/test_preperation', [PagesController::class, 'test_preperation'])->name('test_preperation');
Route::get('/courses', [PagesController::class, 'courses'])->name('courses');
Route::get('/counselling', [PagesController::class, 'counselling'])->name('counselling');


//countries
Route::get('/UK', [PagesController::class, 'UK'])->name('UK');
Route::get('/USA', [PagesController::class, 'USA'])->name('USA');
Route::get('/Canada', [PagesController::class, 'Canada'])->name('Canada');
Route::get('/Australia', [PagesController::class, 'Australia'])->name('Australia');
Route::get('/NewZealand', [PagesController::class, 'NewZealand'])->name('NewZealand');
