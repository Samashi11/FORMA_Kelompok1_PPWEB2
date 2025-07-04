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
        {{-- </div> --}}
        {{-- @livewireScripts --}}
    </body>
</html>
