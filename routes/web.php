<?php

use App\Http\Controllers\CarouselController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostCRUDController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
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

Auth::routes();
Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/search', [PagesController::class, 'search'])->name('search');
Route::get('/genre-fantasy', [PagesController::class, 'genre_fantasy'])->name('genre-fantasy');
Route::get('/genre-romance', [PagesController::class, 'genre_romance'])->name('genre-romance');
Route::get('/genre-action', [PagesController::class, 'genre_action'])->name('genre-action');
Route::get('/anime-details/{id}', [PagesController::class, 'detail'])->name('anime-details');
Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/login', [App\Http\Controllers\AuthenticationController::class, 'login'])->name('login');
// Route::post('/loginPost', [App\Http\Controllers\AuthenticationController::class, 'loginPost'])->name('loginPost');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::post('/contactPost', [PagesController::class, 'contactPost'])->name('contactPost');
// Route::get('/dashboard', [PagesController::class, 'dashboard'])->middleware('auth')->name('dashboard');

Route::post('/commentPost/', [PagesController::class, 'commentPost'])->name('commentPost');
// Route::get('/delete/{id}', [ContactController::class, 'delete'])->middleware('auth')->name('delete_contacts');
// Route::post('/delete/{id}', [ContactController::class, 'delete'])->middleware('auth')->name('delete_contacts');
Route::middleware(['auth'])->group(function () {
    Route::resource('dashboards', PostCRUDController::class);
    Route::resource('carousels', CarouselController::class);
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
});
