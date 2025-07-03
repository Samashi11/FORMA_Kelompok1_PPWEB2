<x-guest-layout>
    <div class="min-h-screen bg-blue-500 flex items-center justify-center px-4 sm:px-6">
        <div class="w-full max-w-md sm:max-w-lg">
            <div class="text-center mb-8">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white">
                    {{ __('Welcome to') }}
                </h2>
                <h1 class="mt-2 text-4xl sm:text-5xl md:text-6xl font-extrabold bg-gradient-to-r from-blue-300 to-cyan-300 bg-clip-text text-transparent">
                    FORMA
                </h1>
                <h2 class="mt-1 text-lg sm:text-xl font-semibold bg-gradient-to-r from-cyan-300 to-blue-300 bg-clip-text text-transparent">
                    INFORMASI ORMAWA
                </h2>
                <p class="mt-3 text-sm sm:text-base text-blue-100">
                    {{ __('Sign in to your account') }}
                </p>
            </div>

            <div class="bg-white/10 backdrop-blur-sm p-5 sm:p-8 border border-white/30 rounded-xl shadow">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4 text-blue-200 text-sm" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-blue-100">Email</label>
                        <x-text-input 
                            id="email" name="email" type="email" required autofocus
                            :value="old('email')" 
                            placeholder="your@email.com"
                            class="mt-1 block w-full p-3 rounded-md bg-white/20 text-white placeholder-blue-200 text-sm border-transparent focus:ring-blue-300 focus:border-blue-300"
                        />
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-blue-200" />
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-blue-100">Password</label>
                        <x-text-input 
                            id="password" name="password" type="password" required 
                            placeholder="••••••••"
                            class="mt-1 block w-full p-3 rounded-md bg-white/20 text-white placeholder-blue-200 text-sm border-transparent focus:ring-blue-300 focus:border-blue-300"
                        />
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-blue-200" />
                    </div>

                    <!-- Remember + Forgot -->
                    <div class="flex items-center justify-between">
                        <label class="flex items-center text-sm text-blue-100">
                            <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                            <span class="ml-2">Remember me</span><br>
                        </label>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm text-blue-200 hover:text-white">
                                Forgot password?
                            </a>
                        @endif
                    </div>

                    <!-- Submit -->
                    <button type="submit" class="w-full py-3 bg-white text-blue-600 font-semibold rounded-md text-base hover:bg-blue-50">
                        Sign in
                    </button>
                </form>

                <p class="mt-4 text-center text-sm text-blue-200">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="text-white hover:underline">
                        Create one
                    </a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>

