<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// top-navigation routes

Route::get('/who-we-are', [PageController::class, 'whoWeAre'])->name('who-we-are');
Route::get('/companies', [PageController::class, 'companies'])->name('companies');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contact-us');

// contents

Route::get('/learn-more', [PageController::class, 'learnMore'])->name('learn-more');
Route::get('/joining-initiative', [PageController::class, 'joinInitiative'])->name('joining-initiative');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
