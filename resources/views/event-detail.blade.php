<x-app-layout>

    @include('layouts.navigation')


    <main class="bg-slate-50 min-h-screen font-sans">
        <!-- Header -->
        {{-- <header class="flex items-center justify-between border-b px-10 py-3 border-[#e7edf4] bg-white">
            <div class="flex items-center gap-4 text-[#0d151c]">
                {{-- <div class="w-4 h-4">
                    <svg viewBox="0 0 48 48" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M44 4H30.6666V17.3334H17.3334V30.6666H4V44H44V4Z" />
                    </svg>
                </div> --}}
                {{-- <h2 class="text-lg font-bold tracking-tight">TechConnect</h2> --}}
            {{-- </div>
            <button class="rounded-full bg-[#0b80ee] text-white h-10 px-4 text-sm font-bold">Daftar Sekarang</button>
        </header> --}}

        <!-- Hero -->
        <section class="flex flex-col gap-6 px-10 py-12 bg-blue-100 rounded-lg mx-10 mt-6">
            <h1 class="text-4xl font-black text-[#0d151c]">{{ $event->title }}</h1>
            <p class="text-base text-[#0d151c]">
                Bergabunglah dengan para inovator, pemimpin industri, dan pemikir visioner di {{ $event->title }}.
            </p>
            <button class="rounded-full bg-[#0b80ee] text-white h-10 px-4 text-sm font-bold w-max">Daftar
                Sekarang</button>
        </section>

        <!-- Tentang -->
        <section class="px-10 py-6">
            <h2 class="text-xl font-bold text-[#0d151c]">Tentang {{ $event->title }}</h2>
            <p class="mt-2 text-base text-[#0d151c]">
                {{ $event->description }}
            </p>
        </section>

        <!-- Pembicara -->
        <section class="px-10 py-6">
            <h2 class="text-xl font-bold text-[#0d151c]">Pembicara Utama</h2>
            <div class="mt-4 flex flex-col gap-2 bg-white p-4 rounded-lg border">
                <p class="text-sm text-[#49749c]">CEO, InnoVision</p>
                <p class="text-base font-bold text-[#0d151c]">{{ $event->pembicara }}</p>
                <p class="text-sm text-[#49749c]">Ahli terkemuka di bidang AI dan inovasi.</p>
            </div>
        </section>

        <!-- Jadwal -->
        <section class="px-10 py-6">
            <h2 class="text-xl font-bold text-[#0d151c]">Jadwal Acara</h2>
            <table class="w-full mt-4 table-auto border-collapse">
                <thead>
                    <tr class="bg-slate-200 text-left">
                        <th class="px-4 py-2">Waktu</th>
                        <th class="px-4 py-2">Sesi</th>
                        <th class="px-4 py-2">Pembicara</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t">
                        <td class="px-4 py-2">09:00 - 10:00</td>
                        <td class="px-4 py-2">Pembukaan</td>
                        <td class="px-4 py-2">MC</td>
                    </tr>
                    <tr class="border-t">
                        <td class="px-4 py-2">10:30 - 12:00</td>
                        <td class="px-4 py-2">Sesi Paralel 1</td>
                        <td class="px-4 py-2">{{ $event->pembicara }}</td>
                    </tr>
                    <tr class="border-t">
                        <td class="px-4 py-2">13:00 - 14:30</td>
                        <td class="px-4 py-2">Sesi Paralel 2</td>
                        <td class="px-4 py-2">Berbagai Pembicara</td>
                    </tr>
                    <tr class="border-t">
                        <td class="px-4 py-2">15:00 - 16:30</td>
                        <td class="px-4 py-2">Penutupan</td>
                        <td class="px-4 py-2">Panel Diskusi</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Footer -->
        <footer class="mt-auto px-10 py-6 bg-white border-t border-[#e7edf4] text-center">
            <div class="flex flex-wrap justify-center gap-6 text-sm text-[#49749c]">
                <a href="#">Kebijakan Privasi</a>
                <a href="#">Syarat dan Ketentuan</a>
            </div>
            <p class="mt-4 text-sm text-[#49749c]">&copy; 2023 TechConnect. All rights reserved.</p>
        </footer>
    </main>

</x-app-layout>
