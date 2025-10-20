<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pemilik - Dashboard RSHP</title>

    {{-- Tailwind CSS via CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'rshp': {
                            'primary': '#0077b6',
                            'secondary': '#00b4d8',
                            'dark': '#03045e',
                            'light': '#90e0ef',
                        }
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-50 text-gray-700 min-h-screen antialiased font-sans">

    {{-- NAVIGATION --}}
    <nav class="bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 shadow-xl sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between py-2">
                {{-- Logo --}}
                <div class="flex-shrink-0">
                    <img src="https://rshp.unair.ac.id/wp-content/uploads/2024/06/UNIVERSITAS-AIRLANGGA-scaled.webp"
                        alt="Logo Unair"
                        class="h-12 w-auto">
                </div>

                {{-- Navigation Links --}}
                <ul class="flex flex-wrap justify-center items-center gap-1 sm:gap-2 list-none">
                    <li>
                        <a href="{{ route('pemilik.home') }}"
                            class="block text-white px-3 py-3 text-sm font-medium transition-all duration-200 bg-blue-600 hover:bg-blue-500 hover:shadow-lg rounded-lg">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pemilik.pet.list') }}"
                            class="block text-white px-3 py-3 text-sm font-medium transition-all duration-200 hover:bg-blue-600 hover:shadow-lg rounded-lg">
                            Pet
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pemilik.reservasi.list') }}"
                            class="block text-white px-3 py-3 text-sm font-medium transition-all duration-200 hover:bg-blue-600 hover:shadow-lg rounded-lg">
                            Reservasi
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pemilik.rekammedis.list') }}"
                            class="block text-white px-3 py-3 text-sm font-medium transition-all duration-200 hover:bg-blue-600 hover:shadow-lg rounded-lg">
                            Rekam Medis
                        </a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit"
                                class="block text-white px-4 py-3 text-sm font-bold transition-all duration-200 bg-red-600 hover:bg-red-500 hover:shadow-lg rounded-lg">
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- MAIN CONTENT --}}
    <main class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">

        {{-- Welcome Section --}}
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow-xl mb-8 hover:shadow-2xl transition-shadow duration-300">
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-blue-700 mb-3">
                    Selamat Datang, {{ ucwords($user->nama) }}! 👋
                </h1>
                <p class="text-gray-600 text-lg">
                    Anda login sebagai <span class="font-bold text-blue-600">{{ $user->role->nama ?? 'Pemilik' }}</span>
                </p>
            </div>

            {{-- Profile Information Card --}}
            @if($pemilik)
            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 p-6 rounded-xl shadow-md border border-blue-100">
                <h2 class="text-2xl font-bold text-blue-700 mb-4 pb-3 border-b-2 border-blue-300">
                    📋 Informasi Profil
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <div class="flex items-center gap-3">
                            <span class="text-2xl">📧</span>
                            <div>
                                <p class="text-sm text-gray-500 font-medium">Email</p>
                                <p class="text-gray-800 font-semibold">{{ $pemilik->user->email ?? '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <div class="flex items-center gap-3">
                            <span class="text-2xl">📱</span>
                            <div>
                                <p class="text-sm text-gray-500 font-medium">No. WhatsApp</p>
                                <p class="text-gray-800 font-semibold">{{ $pemilik->no_wa ?? 'Belum diisi' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-4 rounded-lg shadow-sm md:col-span-2">
                        <div class="flex items-start gap-3">
                            <span class="text-2xl">🏠</span>
                            <div>
                                <p class="text-sm text-gray-500 font-medium">Alamat</p>
                                <p class="text-gray-800 font-semibold">{{ $pemilik->alamat ?? 'Belum diisi' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </section>

        {{-- Quick Actions Section --}}
        <section class="mb-8">
            <h2 class="text-3xl font-bold text-blue-700 mb-6 pb-3 border-b-4 border-cyan-400">
                🚀 Menu Cepat
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- Card 1: Kelola Pet --}}
                <a href="{{ route('pemilik.pet.list') }}"
                    class="group bg-gradient-to-br from-purple-500 via-purple-600 to-indigo-700 rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="p-6 text-white">
                        <div class="text-5xl mb-4">🐾</div>
                        <h3 class="text-2xl font-bold mb-2">Kelola Pet</h3>
                        <p class="text-purple-100 text-sm">
                            Lihat dan kelola data hewan peliharaan Anda
                        </p>
                        <div class="mt-4 flex items-center text-white font-medium group-hover:translate-x-2 transition-transform">
                            <span>Lihat Detail</span>
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                {{-- Card 2: Reservasi --}}
                <a href="{{ route('pemilik.reservasi.list') }}"
                    class="group bg-gradient-to-br from-pink-500 via-rose-600 to-red-600 rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="p-6 text-white">
                        <div class="text-5xl mb-4">📅</div>
                        <h3 class="text-2xl font-bold mb-2">Reservasi</h3>
                        <p class="text-pink-100 text-sm">
                            Buat dan kelola reservasi kunjungan
                        </p>
                        <div class="mt-4 flex items-center text-white font-medium group-hover:translate-x-2 transition-transform">
                            <span>Lihat Detail</span>
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                {{-- Card 3: Rekam Medis --}}
                <a href="{{ route('pemilik.rekammedis.list') }}"
                    class="group bg-gradient-to-br from-cyan-500 via-blue-600 to-blue-700 rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="p-6 text-white">
                        <div class="text-5xl mb-4">📋</div>
                        <h3 class="text-2xl font-bold mb-2">Rekam Medis</h3>
                        <p class="text-cyan-100 text-sm">
                            Lihat riwayat kesehatan hewan peliharaan
                        </p>
                        <div class="mt-4 flex items-center text-white font-medium group-hover:translate-x-2 transition-transform">
                            <span>Lihat Detail</span>
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        {{-- Statistics Section (Optional) --}}
        <section class="bg-white p-6 md:p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-shadow duration-300">
            <h2 class="text-3xl font-bold text-blue-700 mb-6 pb-3 border-b-4 border-cyan-400">
                📊 Statistik Singkat
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                {{-- Total Pet --}}
                <div class="bg-gradient-to-br from-green-50 to-emerald-100 p-6 rounded-xl border-l-4 border-green-500">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm font-medium">Total Pet</p>
                            <p class="text-3xl font-bold text-green-700 mt-2">
                                {{ $pemilik->pets->count() ?? 0 }}
                            </p>
                        </div>
                        <div class="text-5xl">🐶</div>
                    </div>
                </div>

                {{-- Reservasi Aktif --}}
                <div class="bg-gradient-to-br from-orange-50 to-amber-100 p-6 rounded-xl border-l-4 border-orange-500">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm font-medium">Reservasi Aktif</p>
                            <p class="text-3xl font-bold text-orange-700 mt-2">0</p>
                        </div>
                        <div class="text-5xl">📆</div>
                    </div>
                </div>

                {{-- Rekam Medis --}}
                <div class="bg-gradient-to-br from-blue-50 to-indigo-100 p-6 rounded-xl border-l-4 border-blue-500">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm font-medium">Total Rekam Medis</p>
                            <p class="text-3xl font-bold text-blue-700 mt-2">0</p>
                        </div>
                        <div class="text-5xl">📄</div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    {{-- FOOTER --}}
    <footer class="bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 text-white text-center py-8 mt-12 shadow-2xl">
        <div class="max-w-7xl mx-auto px-4">
            <p class="text-base font-medium">
                &copy; {{ date('Y') }} RSHP - Rumah Sakit Hewan Pendidikan Universitas Airlangga
            </p>
            <p class="text-sm mt-2 text-blue-200">
                Dashboard Pemilik - Kelola hewan peliharaan Anda dengan mudah
            </p>
        </div>
    </footer>

</body>

</html>