<x-app-layout>
    @include('layouts.navigation')
    <section class="py-16 bg-gradient-to-br from-blue-50 via-blue-100 to-blue-50">
        <div class="container mx-auto px-6">
            <!-- Header Section -->
            <div class="text-center mb-16">
                <h1 class="text-4xl font-bold mb-4">
                    Meet <span class="text-blue-600">Our Team</span>
                </h1>
                <p class="max-w-2xl mx-auto text-lg text-gray-600">
                    The talented developers behind FORMA
                </p>
            </div>

            <!-- Developer Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $developers = [
                        [
                            'name' => 'Salman Maula Ash-Shidqi',
                            'role' => 'Technical Lead',
                            'photo' => asset('images/developers/salman.jpg'), // Pastikan file ada di public/images/developers/
                            'bio' =>
                                'Developer berpengalaman 10+ tahun. Memandu keputusan arsitektur dan membimbing anggota tim junior',
                            'github' => 'https://github.com/Samashi11',
                            'linkedin' => null,
                            'instagram' => null,
                        ],
                        [
                            'name' => 'Muhamad Yordan Alzisky',
                            'role' => 'QA Engineer',
                            'photo' => asset('images/developers/jordan.jpg'),
                            'bio' =>
                                'Tester yang detail dan memastikan produk kami memenuhi standar kualitas tertinggi. Ahli testing otomatisasi.',
                            'github' => 'https://github.com/Jordan1703',
                            'linkedin' => null,
                            'instagram' => null,
                        ],
                        [
                            'name' => 'Autumm Zebtotanel',
                            'role' => 'Data Scientist',
                            'photo' => asset('images/developers/autumn.jpg'),
                            'bio' =>
                                'Pecinta machine learning yang berdedikasi mengubah data menjadi insight berguna menggunakan Python dan R.',
                            'github' => 'https://github.com/autummzebto',
                            'linkedin' => null,
                            'instagram' => null, // Tidak punya Instagram
                        ],
                        [
                            'name' => 'Hanip Hizbul Haq',
                            'role' => 'Full Stack Developer',
                            'photo' => asset('images/developers/hanip.jpg'), // Pastikan file ada di public/images/developers/
                            'bio' =>
                                'Membangun aplikasi mobile cross-platform dengan Flutter. Fokus pada performa dan animasi yang indah.',
                            'github' => 'https://github.com/Haniphiz',
                            'linkedin' => null,
                            'instagram' => null,
                        ],
                        [
                            'name' => 'Arief Rachman Apriansyah',
                            'role' => 'DevOps Engineer',
                            'photo' => asset('images/developers/rians.jpg'), // Pastikan file ada di public/images/developers/
                            'bio' =>
                                'Ahli infrastruktur cloud dengan keahlian di AWS dan CI/CD. Gemar mengotomatisasi segala hal.',
                            'github' => 'https://github.com/Riansyah96',
                            'linkedin' => null,
                            'instagram' => null,
                        ],
                        [
                            'name' => 'Muhammad anfasa umar',
                            'role' => 'UI/UX Designer',
                            'photo' => asset('images/developers/umar.jpg'), // Pastikan file ada di public/images/developers/
                            'bio' =>
                                'Menciptakan desain yang intuitif dan user-friendly. Menguasai Figma dan prinsip-prinsip desain interaksi.',
                            'github' => 'https://github.com/anfasaumar',
                            'linkedin' => null,
                            'instagram' => null,
                        ],
                    ];
                @endphp

                @foreach ($developers as $developer)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                        <!-- Developer Photo -->
                        <div class="w-full h-64 bg-gray-200 flex items-center justify-center">
                            <img src="{{ $developer['photo'] }}" alt="{{ $developer['name'] }}"
                                class="w-full h-full object-cover">
                        </div>

                        <!-- Developer Info -->
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-1">{{ $developer['name'] }}</h3>
                            <p class="text-blue-600 mb-4">{{ $developer['role'] }}</p>
                            <p class="text-gray-600 mb-6">{{ $developer['bio'] }}</p>

                            <!-- Social Links -->
                            <div class="flex space-x-4">
                                @if ($developer['github'])
                                    <a href="{{ $developer['github'] }}" target="_blank"
                                        class="text-gray-600 hover:text-blue-600">
                                        <i class="fab fa-github"></i>
                                    </a>
                                @endif
                                @if ($developer['linkedin'])
                                    <a href="{{ $developer['linkedin'] }}" target="_blank"
                                        class="text-gray-600 hover:text-blue-600">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                @endif
                                @if ($developer['instagram'])
                                    <a href="{{ $developer['instagram'] }}" target="_blank"
                                        class="text-gray-600 hover:text-blue-600">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Font Awesome untuk ikon sosial media -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</x-app-layout>
