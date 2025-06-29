<x-guest-layout>
    <div class="min-h-screen bg-blue-500 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <!-- Logo/Header -->
        <div class="sm:mx-auto sm:w-full sm:max-w-md text-center">
            <h2 class="mt-6 text-3xl font-extrabold text-white">
                {{ __('Welcome Back!') }}
            </h2>
            <p class="mt-2 text-sm text-blue-100">
                {{ __('Sign in to your account') }}
            </p>
        </div>

        <!-- Form Container -->
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white/10 backdrop-blur-sm py-8 px-4 shadow sm:rounded-lg sm:px-10 border border-white/20">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4 text-blue-200" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <!-- Email -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium text-blue-100" />
                        <div class="mt-1">
                            <x-text-input 
                                id="email" 
                                name="email" 
                                type="email" 
                                :value="old('email')" 
                                required 
                                autofocus 
                                class="block w-full bg-white/20 text-white placeholder-blue-200 border-transparent focus:border-blue-300 focus:ring-blue-300 rounded-md"
                                placeholder="your@email.com"
                            />
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-blue-200" />
                        </div>
                    </div>

                    <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('Password')" class="block text-sm font-medium text-blue-100" />
                        <div class="mt-1">
                            <x-text-input 
                                id="password" 
                                name="password" 
                                type="password" 
                                required 
                                autocomplete="current-password" 
                                class="block w-full bg-white/20 text-white placeholder-blue-200 border-transparent focus:border-blue-300 focus:ring-blue-300 rounded-md"
                                placeholder="••••••••"
                            />
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-blue-200" />
                        </div>
                    </div>

                    <!-- Remember & Forgot Password -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="remember_me" class="ml-2 block text-sm text-blue-100">
                                {{ __('Remember me') }}
                            </label>
                        </div>

                        @if (Route::has('password.request'))
                            <div class="text-sm">
                                <a href="{{ route('password.request') }}" class="font-medium text-blue-200 hover:text-white">
                                    {{ __('Forgot password?') }}
                                </a>
                            </div>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-blue-600 bg-white hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white">
                            {{ __('Sign in') }}
                        </button>
                    </div>
                </form>

                <!-- Register Link -->
                <div class="mt-6 text-center">
                    <p class="text-sm text-blue-200">
                        {{ __('Dont have an account?') }}
                        <a href="{{ route('register') }}" class="font-medium text-white hover:text-blue-50">
                            {{ __('Create one') }}
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>