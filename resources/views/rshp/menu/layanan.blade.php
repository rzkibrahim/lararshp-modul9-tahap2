{{-- resources/views/layanan.blade.php --}}
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layanan Publik - RSHP Universitas Airlangga</title>

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
                        class="block text-white px-3 py-3 text-sm font-medium transition-all duration-200 bg-blue-600 shadow-lg rounded-lg">
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
                        kesehatan lainnya seperti permintaan surat keterangan sehat. Tindakan observasi dan diagnosis, juga 
                        bisa diteguhkan dengan berbagai macam pemeriksaan yang bisa kami lakukan, misalnya pemeriksaan sitologi, 
                        dermatologi, hematologi, atau pemeriksaan radiologi, ultrasonografi, bahkan pemeriksaan elektrokardiografi.
                    </p>
                    <p class="text-justify mb-4">
                        Bilamana diperlukan pemeriksaan-pemeriksaan lain yang diperlukan seperti pemeriksaan kultur bakteri, 
                        atau pemeriksaan jaringan/histopatologi, dan lain-lain kami bekerja sama dengan Fakultas Kedokteran 
                        Hewan Universitas Airlangga untuk membantu melakukan pemeriksaan-pemeriksaan tersebut. Selain itu kami 
                        mempunyai rapid test untuk pemeriksaan cepat, untuk meneguhkan diagnosa penyakit-penyakit berbahaya 
                        pada kucing seperti panleukopenia, calicivirus, rhinotracheitis, FIP, dan pada anjing seperti parvovirus, 
                        canine distemper.
                    </p>
                    <p class="font-semibold mb-3 text-lg">Layanan kesehatan hewan di poliklinik yang kami lakukan antara lain:</p>
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
                        yang handal. Sebelum rawat inap, klien wajib mengisi inform konsen yang artinya klien telah diberi 
                        penjelasan yang detail tentang kondisi penyakit pasien dan menyetujui rencana terapi yang akan dijalankan 
                        sepengetahuan klien. Klien juga diberitahu biaya yang dibebankan untuk semua layanan. RSHP menerima 
                        pembayaran tunai maupun kartu debit bank.
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
                                <span class="text-blue-600 mr-2">•</span> Gastrotomi; Entrotomi; Enterektomi; Salivary mucocele
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">•</span> Ovariohisterektomi; Sectio caesar; Piometra
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">•</span> Sistotomi; Urethrostomi
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">•</span> Fraktur Tulang
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">•</span> Hernia Diafragmatika
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">•</span> Hernia Perinealis
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">•</span> Hernia Inguinalis
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">•</span> Eksisi Tumor
                            </li>
                        </ul>
                    </div>
                </div>
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