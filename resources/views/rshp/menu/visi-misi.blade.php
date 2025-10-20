{{-- resources/views/visi-misi.blade.php --}}
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visi Misi dan Tujuan - RSHP Universitas Airlangga</title>

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
            <ul class="flex flex-wrap justify-start items-center gap-1 sm:gap-2 list-none py-2">
                <li>
                    <a href="{{ route('home') }}"
                        class="block text-white px-3 py-3 text-sm font-medium transition-all duration-200 hover:bg-blue-600 hover:shadow-lg rounded-lg">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{route('struktur')}}"
                        class="block text-white px-3 py-3 text-sm font-medium transition-all duration-200 hover:bg-blue-600 hover:shadow-lg rounded-lg">
                        Struktur Organisasi
                    </a>
                </li>
                <li>
                    <a href="{{route('layanan')}}"
                        class="block text-white px-3 py-3 text-sm font-medium transition-all duration-200 hover:bg-blue-600 hover:shadow-lg rounded-lg">
                        Layanan Publik
                    </a>
                </li>
                <li>
                    <a href="{{route('visi-misi')}}"
                        class="block text-white px-3 py-3 text-sm font-medium transition-all duration-200 bg-blue-600 shadow-lg rounded-lg">
                        Visi Misi
                    </a>
                </li>
                <li class="ml-auto">
                    <a href="{{ route('login') }}"
                        class="block text-white px-4 py-3 text-sm font-bold transition-all duration-200 bg-blue-600 hover:bg-blue-500 hover:shadow-lg rounded-lg">
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    {{-- HEADER --}}
    <header class="bg-gradient-to-br from-blue-600 via-cyan-500 to-blue-400 py-12 shadow-2xl">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <img src="https://rshp.unair.ac.id/wp-content/uploads/2024/06/UNIVERSITAS-AIRLANGGA-scaled.webp"
                alt="Logo Universitas Airlangga"
                class="max-h-40 w-auto mx-auto drop-shadow-2xl">
        </div>
    </header>

    {{-- MAIN CONTENT --}}
    <main class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
        
        {{-- Section: Visi Misi dan Tujuan --}}
        <section id="visimisi" class="bg-white p-6 md:p-8 rounded-2xl shadow-xl mb-8 hover:shadow-2xl transition-shadow duration-300">
            <h2 class="text-3xl font-bold text-blue-700 mb-6 pb-3 border-b-4 border-cyan-400">
                Visi, Misi, dan Tujuan
            </h2>
            
            <div class="overflow-x-auto">
                <table class="w-full border-collapse rounded-xl overflow-hidden shadow-lg">
                    <thead>
                        <tr class="bg-gradient-to-r from-blue-700 to-blue-600 text-white">
                            <th class="p-4 text-left font-bold text-lg w-1/4">Kategori</th>
                            <th class="p-4 text-left font-bold text-lg">Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white hover:bg-blue-50 transition-colors">
                            <td class="p-4 border-b border-gray-200 font-bold text-blue-700 align-top">Visi</td>
                            <td class="p-4 border-b border-gray-200 text-gray-700">
                                Menjadi rumah sakit hewan pendidikan yang unggul dalam pelayanan, pendidikan,
                                dan penelitian untuk meningkatkan kesejahteraan hewan dan masyarakat.
                            </td>
                        </tr>
                        <tr class="bg-blue-50 hover:bg-blue-100 transition-colors">
                            <td class="p-4 border-b border-gray-200 font-bold text-blue-700 align-top">Misi</td>
                            <td class="p-4 border-b border-gray-200 text-gray-700">
                                <ul class="space-y-2">
                                    <li class="flex items-start">
                                        <span class="text-blue-600 mr-2 mt-1">•</span>
                                        <span>Menyelenggarakan pelayanan kesehatan hewan yang paripurna dan berorientasi pada kesejahteraan hewan.</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-600 mr-2 mt-1">•</span>
                                        <span>Mendukung pendidikan kedokteran hewan melalui praktik klinis dan riset berkualitas.</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-600 mr-2 mt-1">•</span>
                                        <span>Mengembangkan penelitian yang berdampak bagi kesehatan hewan dan masyarakat.</span>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="bg-white hover:bg-blue-50 transition-colors">
                            <td class="p-4 font-bold text-blue-700 align-top">Tujuan</td>
                            <td class="p-4 text-gray-700">
                                <ul class="space-y-2">
                                    <li class="flex items-start">
                                        <span class="text-blue-600 mr-2 mt-1">•</span>
                                        <span>Meningkatkan mutu layanan dan keselamatan pasien hewan.</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-600 mr-2 mt-1">•</span>
                                        <span>Menyediakan sarana pendidikan klinik yang terintegrasi.</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-600 mr-2 mt-1">•</span>
                                        <span>Mendorong inovasi penelitian di bidang veteriner.</span>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    {{-- FOOTER --}}
    <footer class="bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 text-white text-center py-8 mt-12 shadow-2xl">
        <div class="max-w-7xl mx-auto px-4">
            <p class="text-base font-medium">&copy; {{ date('Y') }} RSHP - Rumah Sakit Hewan Pendidikan Universitas Airlangga</p>
            <p class="text-sm mt-2 text-blue-200">Dibuat dengan semangat dan dedikasi untuk kesejahteraan hewan</p>
        </div>
    </footer>

</body>

</html>