<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - RSHP Universitas Airlangga</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font (optional, biar lebih rapi) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-900 to-blue-500">

    <div class="bg-white shadow-2xl rounded-2xl p-8 w-[380px]">
        <div class="flex flex-col items-center mb-6">
            <!-- Logo -->
            <div class="flex items-center space-x-3 mb-2">
                <img src="https://unair.ac.id/wp-content/uploads/2025/07/cropped-UNAIR_SEAL_LOGO_2025_RGB-01-scaled-1.webp" alt="UNAIR" class="w-12 h-12">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOVNcKuyK1wQAPxHcua9RINMjgomwbctohdQ&s" alt="RSHP" class="w-12 h-12">
            </div>
            <h1 class="text-2xl font-bold text-blue-900">Login RSHP</h1>
            <p class="text-sm text-gray-500">Universitas Airlangga</p>
        </div>

        <!-- Form -->
        <form action="{{ route('login.process') }}" method="POST" class="space-y-4">
            @csrf
            
            <!-- Error Message -->
            @if($errors->has('login'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ $errors->first('login') }}</span>
                </div>
            @endif

            <div>
                <label for="email" class="block text-left text-gray-700 font-medium">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                    class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none"
                    placeholder="Masukkan email anda" required>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-left text-gray-700 font-medium">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none"
                    placeholder="Masukkan password" required>
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center gap-2 text-gray-600">
                    <input type="checkbox" name="remember" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-400">
                    Ingat saya
                </label>
                <a href="#" class="text-blue-600 hover:underline">Lupa password?</a>
            </div>

            <button type="submit"
                class="w-full bg-gradient-to-r from-blue-900 to-blue-500 text-white py-3 rounded-lg font-semibold shadow-md hover:opacity-90 transition">
                Masuk
            </button>
            
            <a href="{{ route('home') }}"
                class="block text-center w-full bg-gradient-to-r from-blue-900 to-blue-500 text-white py-3 rounded-lg font-semibold shadow-md hover:opacity-90 transition">
                Kembali
            </a>
        </form>

        <!-- Footer kecil -->
        <p class="text-center text-gray-500 text-xs mt-6">
            © 2025 Rumah Sakit Hewan Pendidikan - Universitas Airlangga
        </p>
    </div>

</body>

</html>