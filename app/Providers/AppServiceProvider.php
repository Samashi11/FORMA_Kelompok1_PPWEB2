<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User; // Import the User model

class AppServiceProvider extends ServiceProvider
{
	public const HOME = '/home';
	/**
	 * Register any application services.
	 */
	public function register(): void
	{
		//
	}

	/**
	 * Bootstrap any application services.
	 */
	public function boot(): void
	{
		//
	}
	// public static function redirectToLogin()
	// {
	// 	return match (auth()->user()?->role) {
	// 		'admin' => '/admin',
	// 		'anggota' => '/orma',
	// 		'mahasiswa' => '/',
	// 		default => '/login',
	// 	};
	// }
	public static function redirectToRole(User $user): string
	{
		if ($user->role === 'admin') {
			return '/admin'; // ⬅️ Tujuan dashboard Filament
		}

		return '/'; // Atau dashboard biasa
	}
}
