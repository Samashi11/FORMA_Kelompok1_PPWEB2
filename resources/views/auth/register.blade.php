<x-guest-layout>
    <div class="min-h-screen bg-blue-500 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <!-- Logo/Header -->
        <div class="sm:mx-auto sm:w-full sm:max-w-md text-center">
            <h2 class="mt-6 text-3xl font-extrabold text-white">
                {{ __('Create New Account') }}
            </h2>
            <p class="mt-2 text-sm text-blue-100">
                {{ __('Fill in your details to register') }}
            </p>
        </div>

        <!-- Form Container -->
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white/10 backdrop-blur-sm py-8 px-4 shadow sm:rounded-lg sm:px-10 border border-white/20">
                <form method="POST" action="{{ route('register') }}" class="space-y-6">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" class="block text-sm font-medium text-blue-100" />
                        <div class="mt-1">
                            <x-text-input 
                                id="name" 
                                name="name" 
                                type="text" 
                                :value="old('name')" 
                                required 
                                autofocus 
                                autocomplete="name"
                                class="block w-full bg-white/20 text-white placeholder-blue-200 border-transparent focus:border-blue-300 focus:ring-blue-300 rounded-md"
                                placeholder="Your full name"
                            />
                            <x-input-error :messages="$errors->get('name')" class="mt-2 text-blue-200" />
                        </div>
                    </div>

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
                                autocomplete="username"
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
                                autocomplete="new-password"
                                class="block w-full bg-white/20 text-white placeholder-blue-200 border-transparent focus:border-blue-300 focus:ring-blue-300 rounded-md"
                                placeholder="••••••••"
                            />
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-blue-200" />
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="block text-sm font-medium text-blue-100" />
                        <div class="mt-1">
                            <x-text-input 
                                id="password_confirmation" 
                                name="password_confirmation" 
                                type="password" 
                                required 
                                autocomplete="new-password"
                                class="block w-full bg-white/20 text-white placeholder-blue-200 border-transparent focus:border-blue-300 focus:ring-blue-300 rounded-md"
                                placeholder="••••••••"
                            />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-blue-200" />
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-blue-600 bg-white hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white">
                            {{ __('Register') }}
                        </button>
                    </div>

                    <!-- Login Link -->
                    <div class="text-center">
                        <p class="text-sm text-blue-200">
                            {{ __('Already have an account?') }}
                            <a href="{{ route('login') }}" class="font-medium text-white hover:text-blue-50">
                                {{ __('Sign in') }}
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>