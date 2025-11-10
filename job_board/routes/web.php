<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('Page.Home.HomePage');
})->middleware(['auth', 'verified'])->name('homepage');
Route::get('/job', function () {
    return view('Page.Job.FilterJob');
})->middleware(['auth', 'verified'])->name('job');
Route::get('/contact-us', function () {
    return view('Page.Contact.ContactUs');
})->middleware(['auth', 'verified'])->name('contactUs');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
