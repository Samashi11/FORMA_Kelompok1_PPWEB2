<x-app-layout>
    {{-- <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot> --}}
    @include('layouts.navigation')

    <main class="flex-1">
        <section
            class="relative flex min-h-[calc(100vh-80px)] items-center justify-center bg-cover bg-center py-16 md:py-24"
            style='background-image: linear-gradient(rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.6) 100%), url("https://kelaskaryawan.com/wp-content/uploads/2023/07/2018-04-14-680x437-1-678x381.jpg");'>
            <div class="container mx-auto px-6 text-center text-white">
                <h1 class="text-4xl font-black leading-tight tracking-tight sm:text-5xl md:text-6xl">
                    Connect with <span class="text-[var(--primary-color)]">ORMAWA</span>
                </h1>
                <p class="mt-4 max-w-2xl mx-auto text-lg font-light md:text-xl">
                    Discover student organizations, events, and resources to enhance your college experience.
                </p>
                <div class="mt-8 flex justify-center">
                    <label class="flex flex-col w-full max-w-xl h-14">
                        <div class="flex w-full flex-1 items-stretch rounded-full shadow-lg h-full overflow-hidden">
                            <div class="input-search-icon bg-white">
                                <svg fill="currentColor" height="24px" viewBox="0 0 256 256" width="24px"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                                    </path>
                                </svg>
                            </div>
                            <input class="input-search border-none pl-2"
                                placeholder="Search for organizations, events..." value="" />
                            <button
                                class="btn-primary flex items-center justify-center px-6 text-base font-semibold tracking-wide">
                                <span class="truncate">Search</span>
                            </button>
                        </div>
                    </label>
                </div>
            </div>
        </section>
        <section class="py-16 md:py-24 bg-[var(--surface-background)]">
            <div class="container mx-auto px-6">
                <h2 class="section-title text-center mb-12">Featured Organizations</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($organizations as $org)
                        <div class="card">
                            <div class="w-full h-56 bg-center bg-no-repeat bg-cover"
                                style="background-image: url('{{ asset('storage/' . $org->logo) }}');">
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-[var(--text-primary)] mb-2">{{ $org->name }}</h3>
                                <p class="text-sm text-[var(--text-secondary)]">{{ Str::limit($org->description, 70) }}</p>
                                <a class="inline-block mt-4 text-[var(--primary-color)] font-medium hover:underline"
                                    href="{{ route('organization.show', $org->id) }}">Learn More →</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

</x-app-layout>
