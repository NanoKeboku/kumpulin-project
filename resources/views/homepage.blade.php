<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kumpul.in - Reservasi Ruang Komunitas Lokal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Konfigurasi Tailwind untuk palet warna yang lebih community-friendly (Hijau & Biru Teal)
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'kumpul-main': '#059669', // Primary Green (Emerald/Base Green)
                        'kumpul-accent': '#14b8a6', // Secondary Teal/Cyan for accents
                        'kumpul-light': '#ecfdf5', // Light background for soft areas
                        'soft-gray': '#f9fafb',
                    }
                }
            }
        }
    </script>
    <style>
        /* ========================================
        1. Custom Animations & Styles
        ======================================== */
        
        /* Logo Slider */
        .slider-track {
            display: flex;
            width: fit-content;
            animation: scroll-left 35s linear infinite;
        }
        @keyframes scroll-left {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .slider-mask {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            /* White fade for clean effect */
            background: linear-gradient(to right, 
                white 0%, rgba(255, 255, 255, 0) 10%, 
                rgba(255, 255, 255, 0) 90%, white 100% 
            );
            pointer-events: none; 
            z-index: 10;
        }

        /* Card Hover Animation (Clean Lift) */
        .card-lift-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-lift-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        }

        /* Hero Background - Minimalist Curve */
        .hero-bg-overlay {
            position: absolute;
            top: 0;
            right: 0;
            width: 70%;
            height: 100%;
            background-color: #14b8a6; /* Warna kumpul-accent */
            transform: skewX(-15deg) translateX(20%);
            z-index: 1;
            animation: fadeInRight 1.5s ease-out;
        }

        @keyframes fadeInRight {
            0% { opacity: 0; transform: skewX(-15deg) translateX(40%); }
            100% { opacity: 1; transform: skewX(-15deg) translateX(20%); }
        }

        /* Search Bar Area - clean white box with light shadow */
        .search-bar-container {
            background-color: white;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-white font-sans text-gray-800">

    <header class="sticky top-0 bg-white z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0 text-2xl font-extrabold text-kumpul-main">
                    Kumpul<span class="text-gray-900">.in</span>
                </div>
                <nav class="hidden md:flex space-x-8 text-sm font-medium">
                    <a href="{{ route('home') }}" class="text-gray-600 hover:text-kumpul-main transition">Beranda</a>
                    <a href="{{ route('jelajah') }}" class="text-gray-600 hover:text-kumpul-main transition">Jelajahi Ruang</a>
                    <a href="#" class="text-gray-600 hover:text-kumpul-main transition">Tentang Kami</a>
                    <a href="#" class="text-gray-600 hover:text-kumpul-main transition">Panduan</a>
                </nav>
                <div class="flex items-center">
                    <a href="#" class="flex items-center space-x-2 px-4 py-2 bg-kumpul-main text-white rounded-lg text-sm font-medium hover:bg-kumpul-accent transition shadow-md">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                        <span>Masuk / Daftar</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <section class="relative pt-12 pb-24 md:pt-24 md:pb-40 overflow-hidden bg-kumpul-light">
        <div class="hero-bg-overlay z-0"></div> 
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
            <div class="w-full lg:w-3/4 animate-fade-in">
                <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 leading-tight">
                    Temukan <span class="text-kumpul-main">Ruang Komunitas</span> di Sekitarmu.
                </h1>
                <p class="mt-3 text-xl text-gray-600">
                    Aula Desa, Lapangan, Studio Seni - Semuanya hanya dalam satu klik.
                </p>
            </div>

            <div class="search-bar-container mt-10 p-6 md:p-8 rounded-xl">
                <div class="flex flex-col md:flex-row gap-4">
                    <select class="flex-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-kumpul-main focus:border-kumpul-main shadow-sm">
                        <option>Jenis Ruang: (Misal: Aula, Lapangan, Studio)</option>
                        <option>Aula / Gedung Pertemuan</option>
                        <option>Lapangan Olahraga</option>
                        <option>Studio / Ruang Kreatif</option>
                        <option>Ruang Rapat</option>
                    </select>

                    <select class="flex-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-kumpul-main focus:border-kumpul-main shadow-sm">
                        <option>Lokasi: Pilih Kecamatan / RW</option>
                        <option>Kecamatan Bojong, RW 05</option>
                        <option>Area Kota Tua</option>
                    </select>
                    
                    <input type="date" value="2025-10-25" class="flex-1 p-3 border border-gray-300 rounded-lg text-gray-700 focus:ring-2 focus:ring-kumpul-main focus:border-kumpul-main shadow-sm">
                    
                    <button class="w-full md:w-auto p-3 bg-kumpul-main text-white rounded-lg font-semibold hover:bg-kumpul-accent transition duration-150 shadow-md">
                        Cari Ruang
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20">
        
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-gray-900">
                Solusi Reservasi yang Transparan dan Efisien
            </h2>
            <p class="mt-4 text-lg text-gray-500">
                Kami menjembatani pengelola fasilitas dengan masyarakat lokal.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            <div class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-kumpul-main card-lift-hover">
                <div class="text-kumpul-main mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Dasbor Interaktif</h3>
                <p class="text-sm text-gray-600">Mudah mencari ruang berdasarkan lokasi, fasilitas, dan jenis kegiatan yang kamu butuhkan.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-kumpul-main card-lift-hover">
                <div class="text-kumpul-main mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Ketersediaan Real-Time</h3>
                <p class="text-sm text-gray-600">Lihat status ruang (kosong/terisi) secara langsung, menghilangkan ketidakpastian reservasi.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-kumpul-main card-lift-hover">
                <div class="text-kumpul-main mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Reservasi Digital</h3>
                <p class="text-sm text-gray-600">Pesan ruang, isi formulir, dan dapatkan konfirmasi langsung melalui notifikasi otomatis.</p>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-kumpul-main card-lift-hover">
                <div class="text-kumpul-main mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.62-.921 1.92 0l2.674 8.169h8.692c.95 0 1.371 1.24.588 1.81L18.062 17.6l2.57 7.749c.3.92-.755 1.688-1.54 1.11L12 20.352l-7.592 5.107c-.785.57-1.838-.19-1.539-1.11l2.57-7.749L.588 12.906c-.783-.57-.362-1.81.588-1.81h8.692l2.674-8.169z" clip-rule="evenodd"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Ulasan Transparan</h3>
                <p class="text-sm text-gray-600">Lihat penilaian dari warga sekitar dan bantu pengelola meningkatkan kualitas fasilitas.</p>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <div>
                <span class="text-sm font-semibold text-kumpul-accent uppercase tracking-wider">Manfaat Utama</span>
                <h2 class="mt-2 text-3xl font-bold text-gray-900">
                    Memaksimalkan Potensi Ruang Komunitas Lokal.
                </h2>
                <p class="mt-4 text-gray-600">
                    Kumpul.in dirancang bukan hanya untuk memesan, tapi juga untuk menghidupkan kembali fasilitas yang ada di sekitar Anda, menjadikannya pusat kegiatan yang bermanfaat bagi semua.
                </p>

                <div class="mt-8 space-y-4">
                    <div class="flex items-start">
                        <div class="p-2 bg-kumpul-main/10 text-kumpul-main rounded-full mr-4 flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Bagi Pengguna: Kemudahan Akses</p>
                            <p class="text-sm text-gray-600">Reservasi dari rumah tanpa birokrasi yang rumit.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="p-2 bg-kumpul-main/10 text-kumpul-main rounded-full mr-4 flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Bagi Pengelola: Manajemen Efisien</p>
                            <p class="text-sm text-gray-600">Kalender otomatis dan pelacakan riwayat pemesanan.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="p-2 bg-kumpul-main/10 text-kumpul-main rounded-full mr-4 flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Bagi Komunitas: Pemanfaatan Maksimal</p>
                            <p class="text-sm text-gray-600">Mendorong lebih banyak kegiatan positif di ruang publik.</p>
                        </div>
                    </div>
                </div>
            </div>

             <div class="grid grid-cols-2 gap-4">
                <div class="col-span-2">
                    <img src="https://picsum.photos/600/400?random=4&community" alt="Community gathering" class="rounded-xl shadow-xl w-full h-auto object-cover transform hover:scale-[1.02] transition duration-300">
                </div>
                <div class="col-span-1">
                    <img src="https://picsum.photos/300/200?random=5&hall" alt="Village hall" class="rounded-xl shadow-lg w-full h-40 object-cover transform hover:rotate-1 transition duration-300">
                </div>
                <div class="col-span-1">
                    <img src="https://picsum.photos/300/200?random=6&sports" alt="Local sports field" class="rounded-xl shadow-lg w-full h-40 object-cover transform hover:scale-105 transition duration-300">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-soft-gray py-12 md:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                
                <div class="lg:col-span-2 bg-white p-6 rounded-xl shadow-lg min-h-[400px]">
                    <div class="flex justify-between items-center mb-6 border-b pb-3">
                        <h2 class="text-xl font-bold text-gray-900">Kalender Ketersediaan Ruang (Dummy)</h2>
                        <span class="text-sm text-gray-500">Oktober 2025</span>
                    </div>

                    <div class="text-center text-sm">
                        <div class="grid grid-cols-7 gap-1 font-semibold text-gray-500 mb-2">
                            <span>Min</span><span>Sen</span><span>Sel</span><span>Rab</span><span>Kam</span><span>Jum</span><span>Sab</span>
                        </div>
                        <div class="grid grid-cols-7 gap-1 text-gray-800">
                            <span class="p-2 text-gray-400">28</span>
                            <span class="p-2">1</span>
                            <span class="p-2">2</span>
                            <span class="p-2 bg-kumpul-accent/10 text-kumpul-accent rounded-lg font-bold">3</span> 
                            <span class="p-2">4</span>
                            <span class="p-2">5</span>
                            <span class="p-2 bg-red-100 text-red-700 rounded-lg font-bold">6</span> 
                            <span class="p-2">7</span>
                            <span class="p-2 bg-kumpul-main/30 text-kumpul-main rounded-full font-bold shadow-sm">8</span> 
                            <span class="p-2">9</span>
                            <span class="p-2">10</span>
                            <span class="p-2">11</span>
                            <span class="p-2">12</span>
                            <span class="p-2">13</span>
                            <span class="p-2">14</span>
                        </div>
                    </div>

                    <p class="mt-8 text-gray-500 text-sm">Pilih tanggal pada kalender. Kotak hijau berarti Ruang Rapat RW 05 tersedia. Kotak merah berarti terisi penuh.</p>
                </div>
                
                <div class="lg:col-span-1 space-y-4">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Ruang Populer di Sekitar Anda</h3>
                    
                    <a href="#" class="block p-4 bg-white rounded-xl border border-gray-200 shadow-md card-lift-hover">
                        <p class="text-base font-semibold text-kumpul-main">Aula Serbaguna RW 03</p>
                        <p class="text-sm text-gray-600 mt-1">Kapasitas 100 orang. Cocok untuk nikahan dan rapat besar.</p>
                        <span class="inline-block mt-2 text-xs font-medium text-gray-500 border rounded-full px-2 py-0.5">Kecamatan Bojong</span>
                    </a>
                    
                    <a href="#" class="block p-4 bg-white rounded-xl border border-gray-200 shadow-md card-lift-hover">
                        <p class="text-base font-semibold text-kumpul-main">Studio Lukis Komunitas Seni</p>
                        <p class="text-sm text-gray-600 mt-1">Fasilitas lengkap untuk seni dan workshop kecil.</p>
                        <span class="inline-block mt-2 text-xs font-medium text-gray-500 border rounded-full px-2 py-0.5">Pusat Kota</span>
                    </a>

                    <a href="#" class="block p-4 bg-white rounded-xl border border-gray-200 shadow-md card-lift-hover">
                        <p class="text-base font-semibold text-kumpul-main">Lapangan Voli RT 02</p>
                        <p class="text-sm text-gray-600 mt-1">Bisa disewa per jam, kondisi lapangan baru diaspal.</p>
                        <span class="inline-block mt-2 text-xs font-medium text-gray-500 border rounded-full px-2 py-0.5">Kelurahan Damai</span>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-kumpul-accent py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white">
                Anda Pengelola Ruang Komunitas?
            </h2>
            <p class="mt-4 text-xl text-white/90">
                Daftarkan fasilitas Anda sekarang dan maksimalkan pemanfaatannya!
            </p>
            <div class="mt-8 flex justify-center space-x-4">
                <a href="#" class="px-8 py-3 bg-white text-kumpul-accent font-bold rounded-full text-lg shadow-xl hover:bg-gray-100 card-lift-hover">
                    Daftar Ruang Gratis &rarr;
                </a>
            </div>
            <p class="mt-4 text-sm text-white/70">
                *Pembayaran ke pengguna dilakukan secara manual. Kami menyediakan sistem reservasi.
            </p>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20">
        
        <div class="text-center mb-8">
            <span class="inline-block px-6 py-2 bg-kumpul-light text-lg font-semibold text-gray-700 rounded-lg shadow-sm">
                Mitra Komunitas Lokal
            </span>
        </div>

        <div class="relative overflow-hidden w-full h-20">
            
            <div class="slider-mask"></div>

            <div class="slider-track items-center">
                
                <div class="flex space-x-12 p-2 items-center">
                    <div class="w-32 h-10 bg-gray-200 rounded-md flex-shrink-0 opacity-70 flex items-center justify-center text-xs text-gray-500">RT 01/RW 04</div>
                    <div class="w-36 h-12 bg-gray-300 rounded-md flex-shrink-0 opacity-70 flex items-center justify-center text-xs text-gray-500">Karang Taruna</div>
                    <div class="w-28 h-10 bg-gray-200 rounded-md flex-shrink-0 opacity-70 flex items-center justify-center text-xs text-gray-500">PKK Makmur</div>
                    <div class="w-36 h-14 bg-gray-300 rounded-md flex-shrink-0 opacity-70 flex items-center justify-center text-xs text-gray-500">Dispora Lokal</div>
                    <div class="w-32 h-10 bg-gray-200 rounded-md flex-shrink-0 opacity-70 flex items-center justify-center text-xs text-gray-500">Aula Desa Sukasari</div>
                </div>

                <div class="flex space-x-12 p-2 items-center">
                    <div class="w-32 h-10 bg-gray-200 rounded-md flex-shrink-0 opacity-70 flex items-center justify-center text-xs text-gray-500">RT 01/RW 04</div>
                    <div class="w-36 h-12 bg-gray-300 rounded-md flex-shrink-0 opacity-70 flex items-center justify-center text-xs text-gray-500">Karang Taruna</div>
                    <div class="w-28 h-10 bg-gray-200 rounded-md flex-shrink-0 opacity-70 flex items-center justify-center text-xs text-gray-500">PKK Makmur</div>
                    <div class="w-36 h-14 bg-gray-300 rounded-md flex-shrink-0 opacity-70 flex items-center justify-center text-xs text-gray-500">Dispora Lokal</div>
                    <div class="w-32 h-10 bg-gray-200 rounded-md flex-shrink-0 opacity-70 flex items-center justify-center text-xs text-gray-500">Aula Desa Sukasari</div>
                </div>

            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-white py-12 md:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-8">
                
                <div class="col-span-2 md:col-span-2">
                    <h4 class="text-2xl font-bold text-kumpul-main mb-3">Kumpul<span class="text-white">.in</span></h4>
                    <p class="text-sm text-gray-400">
                        Platform reservasi untuk menghidupkan ruang-ruang komunitas lokal.
                    </p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-gray-400 hover:text-white transition">FB</a>
                        <a href="#" class="text-gray-400 hover:text-white transition">IG</a>
                    </div>
                </div>

                <div>
                    <h5 class="font-semibold mb-4">Temukan Ruang</h5>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white">Aula Desa</a></li>
                        <li><a href="#" class="hover:text-white">Lapangan Olahraga</a></li>
                        <li><a href="#" class="hover:text-white">Studio Komunitas</a></li>
                        <li><a href="#" class="hover:text-white">Peta Lokasi</a></li>
                    </ul>
                </div>

                <div>
                    <h5 class="font-semibold mb-4">Untuk Pengelola</h5>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white">Daftarkan Ruang</a></li>
                        <li><a href="#" class="hover:text-white">Dasbor Pengelola</a></li>
                        <li><a href="#" class="hover:text-white">Manfaat Bergabung</a></li>
                    </ul>
                </div>

                <div>
                    <h5 class="font-semibold mb-4">Bantuan & Legal</h5>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white">Panduan Pengguna</a></li>
                        <li><a href="#" class="hover:text-white">FAQ Reservasi</a></li>
                        <li><a href="#" class="hover:text-white">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="hover:text-white">Kebijakan Privasi</a></li>
                    </ul>
                </div>

            </div>

            <div class="mt-10 pt-8 border-t border-gray-800 text-center">
                <p class="text-sm text-gray-500">
                    &copy; 2025 Kumpul.in. Didedikasikan untuk Komunitas Lokal.
                </p>
            </div>
        </div>
    </footer>
    
</body>
</html>