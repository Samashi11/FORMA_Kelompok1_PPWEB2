<x-app-layout>
    {{-- <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot> --}}
    @include('layouts.navigation')

    <main class="px-10 md:px-20 lg:px-40 flex flex-1 justify-center py-8">
        <div class="layout-content-container flex flex-col max-w-4xl flex-1 bg-[var(--background-primary)] rounded-xl shadow-lg overflow-hidden">
            <div class="bg-slate-100 p-6 md:p-8 border-b border-slate-200">
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <h1 class="text-[var(--text-primary)] tracking-tight text-3xl font-bold leading-tight">
                        Organization</h1>
                    {{-- <button class="bg-[var(--primary-color)] text-white px-5 py-2.5 rounded-lg text-sm font-semibold hover:bg-opacity-90 transition-colors flex items-center gap-2">
                        <i class="material-icons text-lg">group_add</i>
                        Join Organization
                    </button> --}}
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-6 p-6 md:p-8 @container">
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-xl min-h-32 w-32 md:min-h-40 md:w-40 shadow-md"
                    style="background-image: url('{{ asset('storage/' . $organizations->logo) }}');">
                </div>
                <div class="flex flex-col gap-2 flex-1">
                    <h2 class="text-[var(--text-primary)] text-2xl font-bold leading-tight tracking-[-0.015em]">
                        {{ $organizations->name }}</h2>
                    <p class="text-[var(--text-secondary)] text-base font-normal leading-relaxed">
                        {{ $organizations->description }}
                    </p>
                    <div class="flex items-center gap-2 text-[var(--text-secondary)] text-sm mt-2">
                        <i class="material-icons text-lg">group</i>
                        <span>120 members</span>
                        <span class="mx-1">•</span>
                        <i class="material-icons text-lg">calendar_today</i>
                        <span>Established 2020</span>
                    </div>
                </div>
            </div>
            <div class="border-b border-slate-200 px-6 md:px-8">
                <div class="flex gap-8">
                    <a class="tab-link active-tab" href="#">About</a>
                    <a class="tab-link inactive-tab" href="#">Discussion</a>
                    <a class="tab-link inactive-tab" href="#">Events</a>
                    <a class="tab-link inactive-tab" href="#">Members</a>
                </div>
            </div>
            <div class="p-6 md:p-8">
                <section class="mb-8">
                    <h3 class="text-[var(--text-primary)] text-xl font-semibold leading-tight tracking-[-0.015em] mb-4">
                        Our Mission &amp; Vision</h3>
                    <div class="grid grid-cols-1 md:grid-cols-[max-content_1fr] gap-x-6 gap-y-4">
                        <div class="info-grid-item">
                            <p class="info-label font-medium">Mission</p>
                            <p class="info-value">To empower students with the knowledge and skills to excel in
                                the tech industry through hands-on projects, collaborative learning, and
                                industry connections.</p>
                        </div>
                        <div class="info-grid-item">
                            <p class="info-label font-medium">Vision</p>
                            <p class="info-value">To be the leading student organization for technology and
                                innovation on campus, recognized for fostering a culture of creativity and
                                practical problem-solving.</p>
                        </div>
                        <div class="info-grid-item">
                            <p class="info-label font-medium">Core Values</p>
                            <p class="info-value">Innovation, Collaboration, Continuous Learning, Community
                                Engagement, Inclusivity</p>
                        </div>
                    </div>
                </section>
                <section class="mb-8">
                    <h3 class="text-[var(--text-primary)] text-xl font-semibold leading-tight tracking-[-0.015em] mb-4">
                        Contact Information</h3>
                    <div class="grid grid-cols-1 md:grid-cols-[max-content_1fr] gap-x-6 gap-y-4">
                        <div class="info-grid-item">
                            <p class="info-label font-medium flex items-center gap-2"><i
                                    class="material-icons text-lg">email</i>Email</p>
                            <a class="info-value text-[var(--primary-color)] hover:underline"
                                href="mailto:organization4@campusconnect.edu">organization4@campusconnect.edu</a>
                        </div>
                        <div class="info-grid-item">
                            <p class="info-label font-medium flex items-center gap-2"><i
                                    class="material-icons text-lg">language</i>Website</p>
                            <a class="info-value text-[var(--primary-color)] hover:underline"
                                href="https://campusconnect.edu/organization4" rel="noopener noreferrer"
                                target="_blank">campusconnect.edu/organization4</a>
                        </div>
                        <div class="info-grid-item">
                            <p class="info-label font-medium flex items-center gap-2"><i
                                    class="material-icons text-lg">location_on</i>Office Location</p>
                            <p class="info-value">Student Union Building, Room 305</p>
                        </div>
                    </div>
                </section>
                <section>
                    <h3 class="text-[var(--text-primary)] text-xl font-semibold leading-tight tracking-[-0.015em] mb-4">
                        Connect With Us</h3>
                    <div class="flex flex-wrap gap-4">
                        <a class="social-icon-container group" href="#">
                            <div class="social-icon-circle">
                                <svg class="social-icon" fill="currentColor" height="24px" viewBox="0 0 256 256"
                                    width="24px" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z">
                                    </path>
                                </svg>
                            </div>
                            <p
                                class="text-[var(--text-primary)] text-sm font-medium leading-normal group-hover:text-[var(--primary-color)] transition-colors">
                                Instagram</p>
                        </a>
                        <a class="social-icon-container group" href="#">
                            <div class="social-icon-circle">
                                <svg class="social-icon" fill="currentColor" height="24px" viewBox="0 0 256 256"
                                    width="24px" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M247.39,68.94A8,8,0,0,0,240,64H209.57A48.66,48.66,0,0,0,168.1,40a46.91,46.91,0,0,0-33.75,13.7A47.9,47.9,0,0,0,120,88v6.09C79.74,83.47,46.81,50.72,46.46,50.37a8,8,0,0,0-13.65,4.92c-4.31,47.79,9.57,79.77,22,98.18a110.93,110.93,0,0,0,21.88,24.2c-15.23,17.53-39.21,26.74-39.47,26.84a8,8,0,0,0-3.85,11.93c.75,1.12,3.75,5.05,11.08,8.72C53.51,229.7,65.48,232,80,232c70.67,0,129.72-54.42,135.75-124.44l29.91-29.9A8,8,0,0,0,247.39,68.94Zm-45,29.41a8,8,0,0,0-2.32,5.14C196,166.58,143.28,216,80,216c-10.56,0-18-1.4-23.22-3.08,11.51-6.25,27.56-17,37.88-32.48A8,8,0,0,0,92,169.08c-.47-.27-43.91-26.34-44-96,16,13,45.25,33.17,78.67,38.79A8,8,0,0,0,136,104V88a32,32,0,0,1,9.6-22.92A30.94,30.94,0,0,1,167.9,56c12.66.16,24.49,7.88,29.44,19.21A8,8,0,0,0,204.67,80h16Z">
                                    </path>
                                </svg>
                            </div>
                            <p
                                class="text-[var(--text-primary)] text-sm font-medium leading-normal group-hover:text-[var(--primary-color)] transition-colors">
                                Twitter</p>
                        </a>
                        <a class="social-icon-container group" href="#">
                            <div class="social-icon-circle">
                                <svg class="social-icon" fill="currentColor" height="24px" viewBox="0 0 256 256"
                                    width="24px" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm8,191.63V152h24a8,8,0,0,0,0-16H136V112a16,16,0,0,1,16-16h16a8,8,0,0,0,0-16H152a32,32,0,0,0-32,32v24H96a8,8,0,0,0,0,16h24v63.63a88,88,0,1,1,16,0Z">
                                    </path>
                                </svg>
                            </div>
                            <p
                                class="text-[var(--text-primary)] text-sm font-medium leading-normal group-hover:text-[var(--primary-color)] transition-colors">
                                Facebook</p>
                        </a>
                        <a class="social-icon-container group" href="#">
                            <div class="social-icon-circle">
                                <i class="material-icons social-icon" style="font-size: 24px;">discord</i>
                            </div>
                            <p
                                class="text-[var(--text-primary)] text-sm font-medium leading-normal group-hover:text-[var(--primary-color)] transition-colors">
                                Discord</p>
                        </a>
                    </div>
                </section>
            </div>
        </div>
    </main>

</x-app-layout>
