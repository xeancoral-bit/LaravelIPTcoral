<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| These routes handle the frontend pages and contact form.
|
*/

// Public pages
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/home', function () {
    return view('home');
})->name('homepage');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/moreinfo', function () {
    return view('info'); // your blade file is "info.blade.php"
})->name('moreinfo');

// Contact form (frontend)
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Admin (backend) – protect later with auth middleware
Route::prefix('admin')->group(function () {
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');
    Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
});
