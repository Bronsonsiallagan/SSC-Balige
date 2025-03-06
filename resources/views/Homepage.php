<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSC Bimbel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-white shadow-md p-4 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <img src="logo.png" alt="SSC Logo" class="h-10">
        </div>
        <ul class="flex space-x-6 text-gray-900 font-semibold">
            <li class="relative">
                <a href="#" class="hover:text-yellow-500">Beranda</a>
            </li>         
            <li><a href="#" class="hover:text-yellow-500">Program Bimbingan</a></li>
            <li><a href="#" class="hover:text-yellow-500">Materi Pembelajaran</a></li>
            <li><a href="#" class="hover:text-yellow-500">Forum Diskusi</a></li>
            <li><a href="#" class="hover:text-yellow-500">Tentang Kami</a></li>
        </ul>
        <button class="bg-yellow-400 px-6 py-2 rounded text-white font-semibold">Login</button>
    </nav>
    
    <!-- Hero Section -->
    <header class="text-center py-16 bg-white">
        <p class="text-gray-600 font-semibold tracking-widest">RAIH MASA DEPAN CERAH BERSAMA SSC BALIGE</p>
        <h1 class="text-4xl font-bold text-green-700">Future Education, Today</h1>
        <p class="text-2xl font-semibold text-yellow-500">SSC Mental Juara</p>
        <div class="mt-6 flex justify-center">
            <input type="text" placeholder="Cari Program atau Informasi" class="border rounded-l-full px-4 py-2 w-96 focus:outline-none">
            <button class="bg-green-600 text-white px-6 py-2 rounded-r-full">Cari</button>
        </div>
    </header>

    <section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col items-center">
            <img src="{{ asset('images/classroom.jpg') }}" alt="Kelas SSC" class="rounded-lg shadow-lg w-full md:w-3/4 lg:w-2/3">
            <h2 class="text-green-700 text-2xl md:text-3xl font-bold mt-6">Get better everyday with SSC</h2>
            <p class="text-gray-600 text-center mt-3 max-w-2xl">
                Dalam dunia bimbel di Indonesia, SSC merupakan salah satu di antara bimbingan belajar yang didirikan pada tahun 1990 dan terbesar di Indonesia, sehingga cukup beralasan untuk memilih kami, SSC bagian dari rumah singgah belajar para siswa/siswi.
            </p>
            <a href="/" class="mt-5 bg-green-600 text-white font-semibold py-2 px-6 rounded-lg shadow hover:bg-green-700">
                Tentang Kami
            </a>
        </div>
    </div>
</section>
    
    <!-- Program Unggulan -->
<section class="text-center py-12">
    <h2 class="text-green-700 text-2xl md:text-3xl font-bold mt-6">Program Unggulan</h2>
    
    <div class="relative mt-6 px-16">
        <!-- Swiper Container -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Program 1 -->
                <div class="swiper-slide bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('images/program1.jpg') }}" alt="Program Reguler" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold">PROGRAM REGULER</h3>
                        <p class="text-gray-500 text-sm">Program SD, SMP, SMA, ALUMNI</p>
                    </div>
                </div>

                <!-- Program 2 -->
                <div class="swiper-slide bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('images/program2.jpg') }}" alt="Program Privat" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold">PROGRAM PRIVAT</h3>
                        <p class="text-gray-500 text-sm">Program SD, SMP, SMA</p>
                    </div>
                </div>

                <!-- Program 3 -->
                <div class="swiper-slide bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('images/program3.jpg') }}" alt="Intensif UTBK" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold">INTENSIF UTBK</h3>
                        <p class="text-gray-500 text-sm">Program SUPERCAMP & ULTIMA</p>
                    </div>
                </div>
            </div>

            <!-- Navigasi -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var swiper = new Swiper(".swiper-container", {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: { slidesPerView: 1 },
                768: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
            },
        });
    });
</script>

    
    <!-- Testimoni -->
    <section class="bg-gray-800 text-white text-center py-12">
        <h2 class="text-2xl">Apa Kata Siswa Kami</h2>
        <p class="mt-4 italic">"SSC sangat membantu saya dalam belajar!"</p>
    </section>
    
    <!-- Fasilitas -->
    <section class="text-center py-12">
        <h2 class="text-2xl font-semibold">Fasilitas Bimbel</h2>
        <p class="mt-4">Kami menyediakan berbagai fasilitas terbaik untuk siswa.</p>
    </section>
    
    <!-- Footer -->
    <footer class="bg-gray-900 text-white text-center py-4">
        <p>&copy; 2025 SSC Bimbel. All Rights Reserved.</p>
    </footer>
</body>
</html>
