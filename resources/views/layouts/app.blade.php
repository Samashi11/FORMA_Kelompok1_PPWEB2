<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
		@include('components.head-home')
    <body class="font-sans antialiased">
        {{-- @include('layouts.navigation') --}}
				{{-- {{ $navigation }} --}}
        {{-- <div class="bg-gray-100 dark:bg-gray-900"> --}}

            <!-- Page Content -->
                {{ $slot }}
					
					<footer class="bg-[var(--text-primary)] text-slate-300 py-12">
						<div class="container mx-auto px-6">
								<div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8 text-center md:text-left">
										<div>
												<h3 class="text-lg font-semibold text-white mb-3">Campus Connect</h3>
												<p class="text-sm">Your central hub for student life, organizations, and events on campus.
												</p>
										</div>
										<div>
												<h3 class="text-lg font-semibold text-white mb-3">Quick Links</h3>
												<ul class="space-y-2">
														<li><a class="hover:text-[var(--primary-color)] transition-colors text-sm"
																		href="#">Organizations</a></li>
														<li><a class="hover:text-[var(--primary-color)] transition-colors text-sm"
																		href="#">Events Calendar</a></li>
														<li><a class="hover:text-[var(--primary-color)] transition-colors text-sm"
																		href="#">Campus Resources</a></li>
														<li><a class="hover:text-[var(--primary-color)] transition-colors text-sm"
																		href="#">FAQs</a></li>
												</ul>
										</div>
										<div>
												<h3 class="text-lg font-semibold text-white mb-3">Contact Us</h3>
												<p class="text-sm">Student Union Building, Room 101</p>
												<p class="text-sm">123 University Drive, Campus City</p>
												<p class="text-sm">Email: <a class="hover:text-[var(--primary-color)] transition-colors"
																href="mailto:info@campusconnect.edu">info@campusconnect.edu</a></p>
										</div>
								</div>
								<div
										class="border-t border-slate-700 pt-8 flex flex-col md:flex-row justify-between items-center text-sm">
										<p>© 2024 Campus Connect. All rights reserved.</p>
										<div class="flex gap-4 mt-4 md:mt-0">
												<a class="hover:text-[var(--primary-color)] transition-colors" href="#">Privacy
														Policy</a>
												<a class="hover:text-[var(--primary-color)] transition-colors" href="#">Terms of
														Service</a>
										</div>
									</div>
							</div>
					</footer>
        {{-- </div> --}}
        {{-- @livewireScripts --}}
    </body>
</html>
