<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\EventController;

Route::get('/', function () {
	return view('landings');
});

Route::get('/home', [OrganizationController::class, 'indexHome'])->middleware(['auth', 'verified'])->name('home');

Route::get('/organization', [OrganizationController::class, 'index'])->name('organization');

Route::get('/organization/{id}', [OrganizationController::class, 'show'])->name('organization.show');

Route::get('/event', [EventController::class, 'index'])->name('event');

Route::get('/event/{id}', [EventController::class, 'show'])->name('event.show');

// Route::get('/organization', function () {
// 	return view('organization');
// })->middleware(['auth', 'verified'])->name('organization');

// Route::get('/dashboard', function () {
// 	return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
	Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
	Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
	Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
