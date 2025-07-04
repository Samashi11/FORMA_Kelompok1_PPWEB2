<html>

<head>
    <meta charset="utf-8" />
    <link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect" />
    <link as="style"
        href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B600%3B700%3B800"
        onload="this.rel='stylesheet'" rel="stylesheet" />
    <title>FORMA - Student Organization Forum</title>
    <link href="data:image/x-icon;base64," rel="icon" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style type="text/tailwindcss">
        :root {
            --primary-color: #1978e5;
            --text-primary: #0e141b;
            --text-secondary: #4e7097;
            --surface-background: #f8fafc;
            --card-background: #ffffff;
            --border-color: #e2e8f0;
        }

        .btn-primary {
            @apply bg-[var(--primary-color)] text-white hover:bg-opacity-90 transition-colors;
        }

        .nav-link {
            @apply text-[var(--text-primary)] hover:text-[var(--primary-color)] transition-colors;
        }

        .card {
            @apply bg-[var(--card-background)] rounded-xl shadow-lg overflow-hidden transition-all hover:shadow-xl;
        }

        .section-title {
            @apply text-[var(--text-primary)] text-2xl font-bold leading-tight tracking-[-0.015em] md:text-3xl;
        }

        .input-search-icon {
            @apply text-[var(--text-secondary)] flex items-center justify-center pl-4;
        }

        .input-search {
            @apply form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden text-[var(--text-primary)] focus:outline-none focus:ring-2 focus:ring-[var(--primary-color)] focus:border-transparent border-[var(--border-color)] bg-white h-full placeholder:text-[var(--text-secondary)] px-4 text-base font-normal leading-normal;
        }
    </style>
</head>

<body class="bg-[var(--surface-background)]" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
    <div class="relative flex size-full min-h-screen flex-col group/design-root overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">
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
                            <a class="nav-link text-sm font-medium leading-normal" href="#">Home</a>
                            <a class="nav-link text-sm font-medium leading-normal" href="#">Organizations</a>
                            <a class="nav-link text-sm font-medium leading-normal" href="#">Events</a>
                            <a class="nav-link text-sm font-medium leading-normal" href="#">Forums</a>
                        </nav>
                    </div>
                    <div class="flex items-center gap-4">
                        <label class="hidden sm:flex flex-col min-w-40 !h-10 max-w-64">
                            <div class="flex w-full flex-1 items-stretch rounded-lg h-full shadow-sm">
                                <div
                                    class="input-search-icon rounded-l-lg bg-white border-y border-l border-[var(--border-color)]">
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
                                    {{-- <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-[var(--primary-color)] shadow-sm" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDAdiz0iXaZ6d07jjE8U5mTtqAT_j071S1NNchO5yMwazmLM8Wc-VAVo6nSlOA0CUbf2UbljcIi3dopMtHNvVuDFFQFOo4PbXSxBbyRVY60suy2t-YVL2NZCRpg01mgflWKrkXAOSyk225LwzodeZ-RG_4NmK5XQGb97rkOb-515CKo8rZmBbyHrN4sa8xOzyXm7MCb4eIJiM8adelkzaoB-QVW5EJNsI0keAdGukYksGScBMyoxqG59iZA4fxehNP-IHt2OftkgaBH");'></div> --}}
                                    {{-- <a href="{{ url('/home') }}"
                                        class="btn-primary flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 text-sm font-semibold leading-normal tracking-[0.015em] shadow-sm">
                                        Dashboard
                                    </a> --}}
                                    {{-- <a href="{{ route('home') }}" class="btn-primary flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 text-sm font-semibold leading-normal tracking-[0.015em] shadow-sm">
                                        Dashboard
                                    </a> --}}
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
                                <div
                                    class="flex w-full flex-1 items-stretch rounded-full shadow-lg h-full overflow-hidden">
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
                            @foreach ($organizations->take(3) as $org)
                                <div class="card">
                                    <div class="w-full h-56 bg-center bg-no-repeat bg-cover"
                                        style="background-image: url('{{ asset('storage/' . $org->logo) }}');">
                                    </div>
                                    <div class="p-6">
                                        <h3 class="text-xl font-semibold text-[var(--text-primary)] mb-2">
                                            {{ $org->name }}
                                        </h3>
                                        <p class="text-sm text-[var(--text-secondary)]">
                                            {{ Str::limit($org->description, 70) }}
                                        </p>
                                        <a class="inline-block mt-4 text-[var(--primary-color)] font-medium hover:underline"
                                            href="{{ route('organization.show', $org->id) }}">Learn More →</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                <section class="py-16 md:py-24 bg-white">
                    <div class="container mx-auto px-6">
                        <h2 class="section-title text-center mb-12">Upcoming Events</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                            @foreach ($events as $eve)
                                {{-- Debug sementara --}}
                                {{-- <p>{{ Auth::user()->role }} - {{ $eve->status }}</p> --}}
                                @if ($eve->status === 'approved')
                                    <div class="card">
                                        <div class="w-full h-48 bg-center bg-no-repeat bg-cover"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB1mg5-0pPwbIxFyTIZRaF73zNnNy7szOINt1kJfb9xQESrqKHouE8H7QsjBxf-4MDbrv1TBqKRBAIwF0hF3RkMIVFsrJ8UshtvxWX4kXv4c_V7oG4QNgqoVT2fs_9BimhhOXmxrR482rrym5p64L2pCIYwixup6HvPosixRknxznhO2sUwVmpNeCdRiUB5z8jXqBfJFIXH95WrgX3ZgwXftGplmm-dJR1hStUgrNLV3k8f6s3QjxjuRatjcI2c6GQNvaJmJGcBxVrn");'>
                                        </div>
                                        <div class="p-6">
                                            <p
                                                class="text-xs text-[var(--primary-color)] font-semibold uppercase tracking-wider mb-1">
                                                {{ \Carbon\Carbon::parse($eve->event_date)->format('F j, Y') }}</p>
                                            <h3 class="text-lg font-semibold text-[var(--text-primary)] mb-1">
                                                {{ $eve->title }}
                                            </h3>
                                            <p class="text-sm text-[var(--text-secondary)] mb-3">
                                                {{ $eve->description }}</p>
                                            <a class="text-sm text-[var(--primary-color)] font-medium hover:underline"
                                                href="{{ route('event.show', $eve->id) }}">Event Details →</a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </section>
            </main>
            <footer class="bg-[var(--text-primary)] text-slate-300 py-12">
                <div class="container mx-auto px-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                        <!-- About ORMAWA Section -->
                        <div class="space-y-4">
                            <h2 class="text-2xl font-bold mb-4 bg-gradient-to-r from-[#00e4d0] to-[#5983e8] text-transparent bg-clip-text">Tentang ORMAWA</h2>
                            <p class="text-[#f1f1f1] leading-relaxed">
                                ORMAWA (Organisasi Mahasiswa) adalah wadah pengembangan minat, bakat, dan kepemimpinan
                                mahasiswa di kampus. Di sini, kamu bisa menemukan informasi lengkap seputar unit
                                kegiatan, kepanitiaan, event kampus, dan cara bergabung dengan berbagai organisasi
                                mahasiswa yang aktif.
                            </p>

                            <div>
                                <h3 class="font-semibold mb-3 bg-gradient-to-r from-[#00e4d0] to-[#5983e8] text-transparent bg-clip-text">Fitur Utama:</h3>
                                <ul class="list-none space-y-2">
                                    <li class="flex items-start">
                                        <span class="text-[#0fce5d] mr-2">✔</span>
                                        <span class="text-[#f1f1f1]">Daftar organisasi & UKM</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-[#0fce5d] mr-2">✔</span>
                                        <span class="text-[#f1f1f1]">Jadwal kegiatan & event</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-[#0fce5d] mr-2">✔</span>
                                        <span class="text-[#f1f1f1]">Panduan pendaftaran</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-[#0fce5d] mr-2">✔</span>
                                        <span class="text-[#f1f1f1]">Berita terbaru ORMAWA</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Quick Links Section -->
                        <div class="space-y-4">
                            <h3 class="text-2xl font-bold mb-4 bg-gradient-to-r from-[#00e4d0] to-[#5983e8] text-transparent bg-clip-text">Quick Links</h3>
                            <ul class="space-y-3">
                                <li><a class="hover:text-[var(--primary-color)] transition-colors block"
                                        href="#">Organizations</a></li>
                                <li><a class="hover:text-[var(--primary-color)] transition-colors block"
                                        href="#">Events Calendar</a></li>
                                <li><a class="hover:text-[var(--primary-color)] transition-colors block"
                                        href="#">Campus Resources</a></li>
                                <li><a class="hover:text-[var(--primary-color)] transition-colors block"
                                        href="#">FAQs</a></li>
                            </ul>
                        </div>

                        <!-- Contact Section -->
                        <div class="space-y-4">
                            <h3 class="text-2xl font-bold mb-4 bg-gradient-to-r from-[#00e4d0] to-[#5983e8] text-transparent bg-clip-text">Contact Us</h3>
                            <div class="space-y-2">
                                <div class="flex">
                                    <span class="w-28 flex-shrink-0">Kampus A:</span>
                                    <span>Jl. Situ Indah 116, Tugu, Cimanggis, Depok, Jawa Barat</span>
                                </div>
                                <div class="flex">
                                    <span class="w-28 flex-shrink-0">Kampus B:</span>
                                    <span>Jl. Raya Lenteng Agung No.20-21, RT.4/RW.1, Jakarta Selatan</span>
                                </div>
                                <div class="flex">
                                    <span class="w-28 flex-shrink-0">Hotline:</span>
                                    <span>021-786.3191</span>
                                </div>
                                <div class="flex">
                                    <span class="w-28 flex-shrink-0">Whatsapp:</span>
                                    <span>0857.1624.3174</span>
                                </div>
                                <div class="flex">
                                    <span class="w-28 flex-shrink-0">Email:</span>
                                    <a class="hover:text-[var(--primary-color)] transition-colors"
                                        href="mailto:info@nurulfikri.ac.id">info@nurulfikri.ac.id</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Bottom -->
                    <div class="border-t border-slate-700 pt-8 flex flex-col md:flex-row justify-between items-center">
                        <p class="text-sm mb-4 md:mb-0">© 2025 FORMA. All rights reserved.</p>
                        <div class="flex gap-6">
                            <a class="hover:text-[var(--primary-color)] transition-colors text-sm"
                                href="#">Privacy Policy</a>
                            <a class="hover:text-[var(--primary-color)] transition-colors text-sm"
                                href="#">Terms of Service</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    @auth
        <script>
            window.location.href = "{{ route('home') }}";
        </script>
    @endauth
</body>

</html>
