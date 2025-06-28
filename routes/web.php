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

Route::get('/create-event', [EventController::class, 'create'])->middleware(['auth', 'verified'])->name('event.create');

Route::post('/event', [EventController::class, 'store'])->middleware(['auth', 'verified'])->name('event.store');
// Route::get('/dashboard', [EventController::class, 'indexHome'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
	Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
	Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
	Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
