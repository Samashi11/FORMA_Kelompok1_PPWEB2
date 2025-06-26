<header
    class="flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 bg-[var(--background-primary)] px-10 py-4 shadow-sm">
    <div class="flex items-center gap-8">
        <a class="flex items-center gap-3 text-[var(--text-primary)]" href="#">
            <svg class="text-[var(--primary-color)]" fill="none" height="24" viewBox="0 0 24 24" width="24"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M3 3H21L18 12L21 21H3L6 12L3 3Z" fill="currentColor"></path>
            </svg>
            <h1 class="text-xl font-bold leading-tight tracking-[-0.015em]">CampusConnect</h1>
        </a>
        <nav class="flex items-center gap-7">
            <a class="nav-link" href="#">Home</a>
            <a class="nav-link active-nav-link" href="#">Organizations</a>
            <a class="nav-link" href="#">Events</a>
            <a class="nav-link" href="#">Groups</a>
            <a class="nav-link" href="#">Resources</a>
        </nav>
    </div>
    <div class="flex items-center gap-4">
        <label class="flex flex-col min-w-48 !h-10 max-w-72">
            <div class="flex w-full flex-1 items-stretch rounded-lg h-full shadow-sm">
                <div
                    class="text-[var(--text-secondary)] flex border-none bg-[var(--secondary-color)] items-center justify-center pl-3.5 rounded-l-lg border-r-0">
                    <i class="material-icons text-xl">search</i>
                </div>
                <input
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-r-lg text-[var(--text-primary)] focus:outline-0 focus:ring-2 focus:ring-[var(--primary-color)] focus:ring-opacity-50 border-none bg-[var(--secondary-color)] h-full placeholder:text-[var(--text-secondary)] px-3.5 text-sm font-normal leading-normal"
                    placeholder="Search organizations..." value="" />
            </div>
        </label>
        @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <!-- Settings Dropdown -->
                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <x-dropdown align="rig---ht" width="48">
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
        {{-- <button aria-label="Notifications" class="p-2 rounded-full hover:bg-slate-100 transition-colors">
            <i class="material-icons text-[var(--text-secondary)]">notifications_none</i>
        </button>
        <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-slate-200 hover:border-[var(--primary-color)] transition-colors cursor-pointer"
            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCeRnkv8Wi0YvRpqGE_E6A-EghUrAIg6JFHjcydgtNNIS2GPvQ_uJhyD9mCYYcpJ01TDM1wBm2QbFEqjyF3mn2DhVd2CamVld_X8yLXpccHIoLSfzQgmMItp5EGvLtF4qhcuOtgE9L5DPh8AYSOiHCx9rzyQ3Kb-uT60mMchEzXc-a2XJm8SjIdrutJucakCw4-VjKZL9oxP1aIZPN8QjmhJf2O6vGe2Vk5KobVlwyQjpn-vRMvh_xSm2FktEH6A-kKlTB689J6Cjxt");'>
        </div> --}}
    </div>
</header>
