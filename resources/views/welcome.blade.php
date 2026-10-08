<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi UNUGHA</title>
    <!-- CDN Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans antialiased">

    <!-- 1. Navigation Bar -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                
                <!-- Logo & Teks Kiri -->
                <div class="flex items-center space-x-3">
                    <!-- Memanggil gambar dari folder public/logo-unugha.jpg.jpeg -->
                    <img src="{{ asset('logo-unugha.jpg.jpeg') }}" 
                         alt="Logo UNUGHA" 
                         class="h-10 w-auto object-contain">
                    <span class="font-bold text-xl text-blue-800">Sistem Informasi UNUGHA</span>
                </div>

                <!-- Menu Navigasi Tengah -->
                <div class="hidden md:flex space-x-8 font-medium text-gray-600">
                    <a href="#" class="hover:text-blue-700 transition">Home</a>
                    <a href="#" class="hover:text-blue-700 transition">Katalog</a>
                    <a href="#" class="hover:text-blue-700 transition">Kontak</a>
                </div>

                <!-- Tombol Login Kanan -->
                <div>
                    <a href="#" class="bg-blue-700 hover:bg-blue-800 text-white px-5 py-2 rounded-lg font-semibold transition">
                        Login
                    </a>
                </div>

            </div>
        </div>
    </nav>

    <!-- Header / Hero Section -->
    <header class="py-12 bg-blue-50 text-center">
        <!-- Memanggil logo besar di Hero Section -->
        <img src="{{ asset('logo-unugha.jpg.jpeg') }}" 
             alt="Logo UNUGHA" 
             class="h-20 w-auto mx-auto mb-4 object-contain">
        <h1 class="text-3xl md:text-4xl font-extrabold text-blue-900 mb-2">Selamat Datang di Portal UNUGHA</h1>
        <p class="text-gray-600 max-w-xl mx-auto">Layanan terpadu informasi akademis dan kegiatan kampus secara digital.</p>
    </header>

    <!-- 2. Fitur Utama (3 Card dengan CSS Grid) -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Fitur Utama Sistem</h2>

        <!-- Grid 3 Kolom -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200 hover:shadow-lg transition">
                <div class="w-12 h-12 bg-blue-100 text-blue-700 rounded-lg flex items-center justify-center mb-4 text-2xl font-bold">
                    📚
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Katalog Akademik</h3>
                <p class="text-gray-600 text-sm">
                    Akses informasi lengkap mengenai program studi, kurikulum, dan daftar mata kuliah yang tersedia.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200 hover:shadow-lg transition">
                <div class="w-12 h-12 bg-green-100 text-green-700 rounded-lg flex items-center justify-center mb-4 text-2xl font-bold">
                    🎓
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Portal Mahasiswa</h3>
                <p class="text-gray-600 text-sm">
                    Kelola Kartu Rencana Studi (KRS), cek nilai Indeks Prestasi (IPK), dan jadwal perkuliahan harian.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200 hover:shadow-lg transition">
                <div class="w-12 h-12 bg-purple-100 text-purple-700 rounded-lg flex items-center justify-center mb-4 text-2xl font-bold">
                    📢
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Pusat Informasi</h3>
                <p class="text-gray-600 text-sm">
                    Dapatkan pengumuman terbaru seputar kegiatan kampus, beasiswa, dan layanan administrasi online.
                </p>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-6 text-center text-sm text-gray-500">
        &copy; 2026 Sistem Informasi UNUGHA. All rights reserved.
    </footer>

</body>
</html>