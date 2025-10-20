{{-- resources/views/home.blade.php - CDN VERSION (No NPM Required) --}}
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RSHP - Rumah Sakit Hewan Pendidikan Universitas Airlangga</title>

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

    <style>
        /* Custom aspect ratio for iframe */
        .aspect-video-custom {
            aspect-ratio: 16 / 9;
        }
    </style>
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
                        class="block text-white px-3 py-3 text-sm font-medium transition-all duration-200 hover:bg-blue-600 hover:shadow-lg rounded-lg">
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

        {{-- Section: Tentang RSHP --}}
        <section id="home" class="bg-white p-6 md:p-8 rounded-2xl shadow-xl mb-8 hover:shadow-2xl transition-shadow duration-300">
            <h2 class="text-3xl font-bold text-blue-700 mb-6 pb-3 border-b-4 border-cyan-400">
                Tentang RSHP
            </h2>

            <div class="flex flex-col lg:flex-row items-start gap-8">
                {{-- Text Content --}}
                <div class="lg:w-3/5 text-justify leading-relaxed text-gray-700">
                    <p class="mb-4">
                        Rumah Sakit Hewan Pendidikan Universitas Airlangga berinovasi untuk selalu meningkatkan
                        kualitas pelayanan. Kami menyediakan fitur pendaftaran online yang mempermudah Anda
                        untuk mendaftarkan hewan kesayangan.
                    </p>
                </div>

                {{-- Video Embed --}}
                <div class="lg:w-2/5 w-full">
                    <div class="relative w-full aspect-video-custom rounded-xl overflow-hidden shadow-lg">
                        <iframe
                            src="https://www.youtube.com/embed/rCfvZPECZvE"
                            title="YouTube video player"
                            class="absolute top-0 left-0 w-full h-full"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>

            {{-- Berita Terkini --}}
            <h2 class="text-3xl font-bold text-blue-700 mb-6 pb-3 border-b-4 border-cyan-400 mt-12">
                Berita Terkini
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- Card 1 --}}
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 group">
                    <div class="overflow-hidden">
                        <img src="https://rshp.unair.ac.id/wp-content/uploads/2024/08/AGT05378-fitur-gambar-scaled-1060x450.jpg"
                            alt="RSHP Goes to Banyuwangi"
                            class="w-full h-52 object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-5 text-center">
                        <h3 class="text-xl font-bold text-blue-700 mb-2">RSHP Goes to Banyuwangi</h3>
                        <p class="text-gray-600 text-sm">Program layanan kesehatan hewan ke masyarakat Banyuwangi</p>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 group">
                    <div class="overflow-hidden">
                        <img src="https://rshp.unair.ac.id/wp-content/uploads/2024/11/Senam-16-e1730696082169-960x450.jpg"
                            alt="Tim Satu Sehat Juara 1"
                            class="w-full h-52 object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-5 text-center">
                        <h3 class="text-xl font-bold text-blue-700 mb-2">Juara 1 Senam Bugar</h3>
                        <p class="text-gray-600 text-sm">Tim Satu Sehat, Juara 1 Senam Bugar Airlangga</p>
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 group">
                    <div class="overflow-hidden">
                        <img src="https://rshp.unair.ac.id/wp-content/uploads/2024/07/RSHP-Undana-1-740x450.jpg"
                            alt="Benchmarking RSHP Undana"
                            class="w-full h-52 object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="p-5 text-center">
                        <h3 class="text-xl font-bold text-blue-700 mb-2">Benchmarking RSHP Undana</h3>
                        <p class="text-gray-600 text-sm">Kunjungan benchmarking dari RSHP Undana</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section: Struktur Organisasi --}}
        <section id="struktur" class="bg-white p-6 md:p-8 rounded-2xl shadow-xl mb-8 hover:shadow-2xl transition-shadow duration-300">
            <h2 class="text-3xl font-bold text-blue-700 mb-6 pb-3 border-b-4 border-cyan-400">
                Struktur Organisasi
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- Direktur --}}
                <div class="bg-gradient-to-b from-white to-blue-50 rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <img src="https://unair.ac.id/wp-content/uploads/2024/04/Direktur-RSHP.webp"
                        alt="Direktur RSHP"
                        class="w-full h-64 object-cover">
                    <div class="p-5 text-center">
                        <h3 class="text-xl font-bold text-blue-700 mb-2">Direktur</h3>
                        <p class="text-gray-700 font-medium">Dr. Ira Sari Yudaniayanti, M.P., drh.</p>
                    </div>
                </div>

                {{-- Wakil Direktur 1 --}}
                <div class="bg-gradient-to-b from-white to-blue-50 rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <img src="https://rshp.unair.ac.id/wp-content/uploads/2023/03/Wakil-Direktur-I-RSHP.png"
                        alt="Wakil Direktur 1 RSHP"
                        class="w-full h-64 object-cover">
                    <div class="p-5 text-center">
                        <h3 class="text-xl font-bold text-blue-700 mb-2">Wakil Direktur 1</h3>
                        <p class="text-gray-700 font-medium">Dr. Nusidanto Triakso, M.P., drh.</p>
                    </div>
                </div>

                {{-- Wakil Direktur 2 --}}
                <div class="bg-gradient-to-b from-white to-blue-50 rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <img src="https://rshp.unair.ac.id/wp-content/uploads/2023/03/Wakil-Direktur-II-RSHP.png"
                        alt="Wakil Direktur 2 RSHP"
                        class="w-full h-64 object-cover">
                    <div class="p-5 text-center">
                        <h3 class="text-xl font-bold text-blue-700 mb-2">Wakil Direktur 2</h3>
                        <p class="text-gray-700 font-medium">Dr. Milyua Soneta S, M.Vet., drh.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section: Layanan Publik --}}
        <section id="layanan" class="bg-white p-6 md:p-8 rounded-2xl shadow-xl mb-8 hover:shadow-2xl transition-shadow duration-300">
            <h2 class="text-3xl font-bold text-blue-700 mb-6 pb-3 border-b-4 border-cyan-400">
                Layanan Publik
            </h2>

            <div class="space-y-6 text-gray-700 leading-relaxed">
                {{-- Poliklinik --}}
                <div class="bg-blue-50 p-6 rounded-xl">
                    <h3 class="text-2xl font-bold text-blue-700 mb-4">Poliklinik</h3>
                    <p class="text-justify mb-4">
                        Poliklinik adalah layanan rawat jalan dimana pelayanan kesehatan hewan dilakukan tanpa pasien menginap.
                        Poliklinik melayani tindakan observasi, diagnosis, pengobatan, rehabilitasi medik, serta pelayanan
                        kesehatan lainnya seperti permintaan surat keterangan sehat.
                    </p>
                    <p class="font-semibold mb-3">Layanan yang tersedia:</p>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-2 ml-6">
                        <li class="flex items-center">
                            <span class="text-blue-600 mr-2">•</span> Rawat Jalan
                        </li>
                        <li class="flex items-center">
                            <span class="text-blue-600 mr-2">•</span> Vaksinasi
                        </li>
                        <li class="flex items-center">
                            <span class="text-blue-600 mr-2">•</span> Akupuntur
                        </li>
                        <li class="flex items-center">
                            <span class="text-blue-600 mr-2">•</span> Kemoterapi
                        </li>
                        <li class="flex items-center">
                            <span class="text-blue-600 mr-2">•</span> Fisioterapi
                        </li>
                        <li class="flex items-center">
                            <span class="text-blue-600 mr-2">•</span> Mandi Terapi
                        </li>
                    </ul>
                </div>

                {{-- Rawat Inap --}}
                <div class="bg-cyan-50 p-6 rounded-xl">
                    <h3 class="text-2xl font-bold text-blue-700 mb-4">Rawat Inap</h3>
                    <p class="text-justify">
                        Rawat inap dilakukan pada pasien-pasien yang berat atau parah dan membutuhkan perawatan intensif.
                        Pasien akan diobservasi dan mendapat perawatan intensif di bawah pengawasan dokter dan paramedis
                        yang handal. RSHP menerima pembayaran tunai maupun kartu debit bank.
                    </p>
                </div>

                {{-- Bedah --}}
                <div class="bg-blue-50 p-6 rounded-xl">
                    <h3 class="text-2xl font-bold text-blue-700 mb-4">Bedah</h3>

                    <div class="mb-6">
                        <h4 class="text-xl font-semibold text-blue-600 mb-3">Tindakan Bedah Minor:</h4>
                        <ul class="space-y-1 ml-6">
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">•</span> Jahit Luka
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">•</span> Kastrasi
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">•</span> Othematoma
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">•</span> Scaling - Root Planning
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">•</span> Ekstraksi Gigi
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-xl font-semibold text-blue-600 mb-3">Tindakan Bedah Mayor:</h4>
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-2 ml-6">
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">•</span> Gastrotomi, Entrotomi, Enterektomi
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">•</span> Ovariohisterektomi
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">•</span> Sectio Caesar
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">•</span> Piometra
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">•</span> Sistotomi, Urethrostomi
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">•</span> Fraktur Tulang
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">•</span> Hernia (Diafragmatika, Perinealis, Inguinalis)
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">•</span> Eksisi Tumor
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

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
                            <td class="p-4 border-b border-gray-200 font-bold text-blue-700">Visi</td>
                            <td class="p-4 border-b border-gray-200 text-gray-700">
                                Menjadi rumah sakit hewan pendidikan yang unggul dalam pelayanan, pendidikan,
                                dan penelitian untuk meningkatkan kesejahteraan hewan dan masyarakat.
                            </td>
                        </tr>
                        <tr class="bg-blue-50 hover:bg-blue-100 transition-colors">
                            <td class="p-4 border-b border-gray-200 font-bold text-blue-700">Misi</td>
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
                            <td class="p-4 font-bold text-blue-700">Tujuan</td>
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