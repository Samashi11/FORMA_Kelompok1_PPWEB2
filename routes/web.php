<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\EventController;

Route::get('/', [DashboardController::class, 'indexHome']);

Route::get('/home', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('home');

Route::get('/organization', [OrganizationController::class, 'index'])->middleware(['auth', 'verified'])->name('organization');

Route::get('/organization/{id}', [OrganizationController::class, 'show'])->middleware(['auth', 'verified'])->name('organization.show');

Route::get('/event', [EventController::class, 'index'])->middleware(['auth', 'verified'])->name('event');

Route::get('/event/{id}', [EventController::class, 'show'])->middleware(['auth', 'verified'])->name('event.show');

Route::get('/create-event', [EventController::class, 'create'])->middleware(['auth', 'verified'])->name('event.create');

Route::post('/event', [EventController::class, 'store'])->middleware(['auth', 'verified'])->name('event.store');
// Route::get('/dashboard', [EventController::class, 'indexHome'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/forum', [ForumController::class, 'index'])->name('forum');
Route::get('/forum/{id}', [ForumController::class, 'detail'])->name('forum.detail');
Route::post('/save-comment', [ForumController::class, 'saveComment'])->name('save.comment');

Route::get('/create-forum', [ForumController::class, 'create'])->middleware(['auth', 'verified'])->name('forum.create');

Route::post('/forum', [ForumController::class, 'store'])->middleware(['auth', 'verified'])->name('forum.store');

Route::middleware('auth')->group(function () {
	Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
	Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
	Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
