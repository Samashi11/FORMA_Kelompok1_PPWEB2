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
            style='background-image: linear-gradient(rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.6) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuBg9s63oUGpag_2yECDxOxP7OF1c8_gOxMDhQo2LvGVxj0_IZwTph3iBB5oc_zGGppCuZtd-jqXe-VEM98P_-IqlC_jRURQSm2w4KsyEgx7AyPP_Dq6gW5lJCnsM5jsb2CpRIG1WObL6Rwe6mU_6VKu2H7PNeS31nxijQdjSMVPks_J0dBCkyiYXTGcgQ5ZFSe_ExJlJFW0th2J9dHGqO64INWIL7UdcZ2cDsJzRCP78Z-5MAy_IAHyU4ydcl0cY4OoLJyvkLfP309k");'>
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
                    <div class="card">
                        <div class="w-full h-56 bg-center bg-no-repeat bg-cover"
                            style='background-image: url("{{ $org->image_url }}");'>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-[var(--text-primary)] mb-2">Tech Innovators
                                Club</h3>
                            <p class="text-sm text-[var(--text-secondary)]">Building innovative tech solutions
                                and fostering a community of aspiring developers and entrepreneurs.</p>
                            <a class="inline-block mt-4 text-[var(--primary-color)] font-medium hover:underline"
                                href="#">Learn More →</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="w-full h-56 bg-center bg-no-repeat bg-cover"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDfjlLSSN7xYEvDhFtHse4LSWHfr_QQP86fL2MqL-PgHb8RQ_UwDrm50dvDzimTLcAp6ASkC_rZLKqAxA_Xi5zNNvmMlYA4m5jx8x_dymjOjS3lqvTCLfKZWH9-pEg1My-6puScOEquRWJOqH6nCmLOnnWO6KVaKIU1UKYU65xmwdVujfZSa8pF2MfjC7aT1o6LFa7IUf42OHnmq0XbDu-MrOXzss5hrjvm3nSjAsoDj4LMnyXEAREMfi0bZXw_7TslAo9--scGL6Ie");'>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-[var(--text-primary)] mb-2">Environmental
                                Action Group</h3>
                            <p class="text-sm text-[var(--text-secondary)]">Promoting environmental
                                sustainability on campus and in the local community through action and
                                education.</p>
                            <a class="inline-block mt-4 text-[var(--primary-color)] font-medium hover:underline"
                                href="#">Learn More →</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="w-full h-56 bg-center bg-no-repeat bg-cover"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAdfgkt_f1gPNXIa7qfLA0MGqnm3y2MWA7lYNcduY5C9A3Cmt8jSsF_Eq-LCVsZN_s_ULV_E1kO2UuvzBnfJgvIQbzACwv_jLWhBLlscAuNEn5dwnYJNfAPLhNoYscFHDAOzIIXnjeO3FQqSLM0W0f802TdDwUuaBjMEk8g6Nkm6fdDV6QkKXORwlMJNqK6yfWcsXdrbpSGa0BJbiGw--iMQLIU9iVQUIujhHOAQ_TtRhI5hX6SeIZJoqTax5B0_eF4GO9Mo_2uyYvI");'>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-[var(--text-primary)] mb-2">Creative Writers
                                Society</h3>
                            <p class="text-sm text-[var(--text-secondary)]">Exploring the art of writing in
                                various forms, from poetry to prose, fostering a supportive community for
                                writers.</p>
                            <a class="inline-block mt-4 text-[var(--primary-color)] font-medium hover:underline"
                                href="#">Learn More →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-app-layout>
