{{-- <nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="rig---ht" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
														<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-[var(--primary-color)] shadow-sm" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDAdiz0iXaZ6d07jjE8U5mTtqAT_j071S1NNchO5yMwazmLM8Wc-VAVo6nSlOA0CUbf2UbljcIi3dopMtHNvVuDFFQFOo4PbXSxBbyRVY60suy2t-YVL2NZCRpg01mgflWKrkXAOSyk225LwzodeZ-RG_4NmK5XQGb97rkOb-515CKo8rZmBbyHrN4sa8xOzyXm7MCb4eIJiM8adelkzaoB-QVW5EJNsI0keAdGukYksGScBMyoxqG59iZA4fxehNP-IHt2OftkgaBH");'></div>
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav> --}}

<header class="sticky top-0 z-50 bg-white/80 backdrop-blur-md shadow-sm">
    <div class="container mx-auto flex items-center justify-between whitespace-nowrap px-6 py-4">
        <div class="flex items-center gap-8">
            <div class="flex items-center gap-3 text-[var(--primary-color)]">
                <div class="size-8">
                    <svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_6_535)">
                            <path clip-rule="evenodd"
                                d="M47.2426 24L24 47.2426L0.757355 24L24 0.757355L47.2426 24ZM12.2426 21H35.7574L24 9.24264L12.2426 21Z"
                                fill="currentColor" fill-rule="evenodd"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_6_535">
                                <rect fill="white" height="48" width="48"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <h2 class="text-[var(--text-primary)] text-xl font-bold leading-tight tracking-[-0.015em]">
                    FORMA</h2>
            </div>
            <nav class="hidden md:flex items-center gap-6">
                <a class="nav-link text-sm font-medium leading-normal" href="{{ route('home') }}">Home</a>
                <a class="nav-link text-sm font-medium leading-normal"
                    href="{{ route('organization') }}">Organizations</a>
                <a class="nav-link text-sm font-medium leading-normal" href="{{ route('event') }}">Events</a>
                <a class="nav-link text-sm font-medium leading-normal" href="{{ route('forum') }}">Forums</a>
            </nav>
        </div>
        <div class="flex items-center gap-4">
            <label class="hidden sm:flex flex-col min-w-40 !h-10 max-w-64">
                <div class="flex w-full flex-1 items-stretch rounded-lg h-full shadow-sm">
                    <div class="input-search-icon rounded-l-lg bg-white border-y border-l border-[var(--border-color)]">
                        <svg fill="currentColor" height="20px" viewBox="0 0 256 256" width="20px"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                            </path>
                        </svg>
                    </div>
                    <input class="input-search rounded-r-lg pl-2" placeholder="Search..." value="" />
                </div>
            </label>
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        @if (Auth::user()->role == 'anggota')
                            <a href="{{ route('event.create') }}"
                                class="btn-primary flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 text-sm font-semibold leading-normal tracking-[0.015em] shadow-sm">
                                Tambah Event
                            </a>
                            <a href="{{ route('forum.create') }}"
                                class="btn-primary flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 text-sm font-semibold leading-normal tracking-[0.015em] shadow-sm">
                                Tambah Forum
                            </a>
                        @endif
                        <!-- Settings Dropdown -->
                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-white-800 hover:text-gray-700 dark:hover:text-gray-800 focus:outline-none transition ease-in-out duration-150">
                                        <div class="bg-center bg-no-repeat px-2 aspect-square bg-cover rounded-full size-10 border-2 border-[var(--primary-color)] shadow-sm"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDAdiz0iXaZ6d07jjE8U5mTtqAT_j071S1NNchO5yMwazmLM8Wc-VAVo6nSlOA0CUbf2UbljcIi3dopMtHNvVuDFFQFOo4PbXSxBbyRVY60suy2t-YVL2NZCRpg01mgflWKrkXAOSyk225LwzodeZ-RG_4NmK5XQGb97rkOb-515CKo8rZmBbyHrN4sa8xOzyXm7MCb4eIJiM8adelkzaoB-QVW5EJNsI0keAdGukYksGScBMyoxqG59iZA4fxehNP-IHt2OftkgaBH");'>
                                        </div>
                                        <div class="px-3">{{ Auth::user()->name }}</div>

                                        <div class="ms-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
											this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                        <!-- Responsive Navigation Menu -->
                        <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
                            <div class="pt-2 pb-3 space-y-1">
                                <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('dashboard')">
                                    {{ __('Dashboard') }}
                                </x-responsive-nav-link>
                            </div>

                            <!-- Responsive Settings Options -->
                            <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                                <div class="px-4">
                                    <div class="font-medium text-base text-gray-800 dark:text-gray-200">
                                        {{ Auth::user()->name }}</div>
                                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                                </div>

                                <div class="mt-3 space-y-1">
                                    <x-responsive-nav-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-responsive-nav-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-responsive-nav-link :href="route('logout')"
                                            onclick="event.preventDefault();
																													this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-responsive-nav-link>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @else
                        <button
                            class="btn-primary flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 text-sm font-semibold leading-normal tracking-[0.015em] shadow-sm">
                            <a href="{{ route('login') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent rounded-sm text-sm leading-normal">
                                Log in
                            </a>
                        </button>

                        @if (Route::has('register'))
                            <button
                                class="btn-primary flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 text-sm font-semibold leading-normal tracking-[0.015em] shadow-sm">
                                <a href="{{ route('register') }}"
                                    class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] rounded-sm text-sm leading-normal">
                                    Register
                                </a>
                            </button>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </div>
</header>
