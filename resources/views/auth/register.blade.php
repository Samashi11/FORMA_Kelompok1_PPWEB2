<x-guest-layout>
    <div class="min-h-screen bg-blue-500 flex flex-col justify-center py-32 sm:px-12 lg:px-32">
        <!-- Header -->
        <div class="sm:mx-auto sm:w-full sm:max-w-4xl text-center">
            <h2 class="mt-10 text-6xl font-extrabold text-white">
                {{ __('Create New Account') }}
            </h2>

            <div class="flex justify-center my-6">
                <link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect" />
                <link as="style"
                    href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B600%3B700%3B800"
                    onload="this.rel='stylesheet'" rel="stylesheet" />
                <h1 class="text-9xl font-extrabold bg-gradient-to-r from-blue-300 to-cyan-300 bg-clip-text text-transparent">FORMA</h1>
                
            </div>
            <div>
                <link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect" />
                <link as="style"
                    href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B600%3B700%3B800"
                    onload="this.rel='stylesheet'" rel="stylesheet" />
                <h2 class="text-5xl font-extrabold bg-gradient-to-r from-cyan-300 to-blue-300 bg-clip-text text-transparent">INFORMASI ORMAWA</h2>
            </div>
            
            <p> </p>
            <p class="mt-4 text-2xl text-blue-100">
                {{ __('Fill in your details to register') }}
            </p>
        </div>

        <!-- Form Container -->
        <div class="mt-16 sm:mx-auto sm:w-full sm:max-w-4xl">
            <div
                class="bg-white/10 backdrop-blur-sm py-12 px-10 shadow sm:rounded-3xl sm:px-16 border-2 border-white/30">
                <form method="POST" action="{{ route('register') }}" class="space-y-12">
                    @csrf
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-2xl font-medium text-blue-100">
                            {{ __('Name') }}
                        </label>
                        <div class="mt-1">
                            <x-text-input id="name" name="name" type="text" :value="old('name')" required
                                autofocus autocomplete="name"
                                class="block w-full bg-white/20 text-white placeholder-blue-200 border-transparent focus:border-blue-300 focus:ring-blue-300 rounded-md text-xl p-4"
                                placeholder="Your full name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2 text-xl text-blue-200" />
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-2xl font-medium text-blue-100">
                            {{ __('Email') }}
                        </label>
                        <div class="mt-1">
                            <x-text-input id="email" name="email" type="email" :value="old('email')" required
                                autocomplete="username"
                                class="block w-full bg-white/20 text-white placeholder-blue-200 border-transparent focus:border-blue-300 focus:ring-blue-300 rounded-md text-xl p-4"
                                placeholder="your@email.com" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-xl text-blue-200" />
                        </div>
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-2xl font-medium text-blue-100">
                            {{ __('Password') }}
                        </label>
                        <div class="mt-1">
                            <x-text-input id="password" name="password" type="password" required
                                autocomplete="new-password"
                                class="block w-full bg-white/20 text-white placeholder-blue-200 border-transparent focus:border-blue-300 focus:ring-blue-300 rounded-md text-xl p-4"
                                placeholder="••••••••" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-xl text-blue-200" />
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-2xl font-medium text-blue-100">
                            {{ __('Confirm Password') }}
                        </label>
                        <div class="mt-1">
                            <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                                required autocomplete="new-password"
                                class="block w-full bg-white/20 text-white placeholder-blue-200 border-transparent focus:border-blue-300 focus:ring-blue-300 rounded-md text-xl p-4"
                                placeholder="••••••••" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-xl text-blue-200" />
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-4 px-4 border border-transparent rounded-md shadow-sm text-2xl font-medium text-blue-600 bg-white hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white">
                            {{ __('Register') }}
                        </button>
                    </div>

                    <!-- Login Link -->
                    <div class="mt-6 text-center">
                        <p class="text-xl text-blue-200">
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
