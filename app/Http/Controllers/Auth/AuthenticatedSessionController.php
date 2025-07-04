<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Providers\AppServiceProvider;

class AuthenticatedSessionController extends Controller
{
	/**
	 * Display the login view.
	 */
	public function create(): View
	{
		return view('auth.login');
	}

	/**
	 * Handle an incoming authentication request.
	 */
	// public function store(LoginRequest $request): RedirectResponse
	// {
	// 	$request->authenticate();

	// 	$request->session()->regenerate();

	// 	return redirect()->intended(route('dashboard', absolute: false));
	// }

	/**
	 * Destroy an authenticated session.
	 */
	public function destroy(Request $request): RedirectResponse
	{
		Auth::guard('web')->logout();

		$request->session()->invalidate();

		$request->session()->regenerateToken();

		return redirect('/');
	}

	public function store(Request $request): RedirectResponse
	{
		$request->validate([
			'email' => 'required|email',
			'password' => 'required',
		]);

		if (Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
			$request->session()->regenerate();

			$user = Auth::user();
			return redirect()->intended(AppServiceProvider::redirectToRole($user));
		}

		return back()->withErrors([
			'email' => 'Email atau password salah.',
		]);
	}

	// public function store(LoginRequest $request): RedirectResponse
	// {
	// 	$request->authenticate();
	// 	$request->session()->regenerate();

	// 	$user = Auth::user();
	
	// 	if ($user->role === 'admin') {
	// 		return redirect()->intended('/admin');
	// 	}
	
	// 	return redirect()->intended('/');
	// }
}
