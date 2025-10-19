<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Ruang: Aula Serbaguna RW 05 - Kumpul.in</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Konfigurasi Tailwind yang sama dengan homepage
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'kumpul-main': '#059669', // Primary Green
                        'kumpul-accent': '#14b8a6', // Secondary Teal
                        'kumpul-light': '#ecfdf5', // Light background
                        'soft-gray': '#f9fafb',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-soft-gray font-sans text-gray-800">

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
                        <span>Masuk</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-16">

        <nav class="text-sm mb-4 text-gray-500">
            <a href="{{ route('jelajah') }}" class="hover:text-kumpul-main">&larr; Kembali ke Pencarian</a>
        </nav>
        
        <div class="mb-8 border-b pb-4">
            <h1 class="text-4xl font-extrabold text-gray-900">
                Aula Serbaguna RW 05 - Graha Warga
            </h1>
            <div class="flex items-center mt-2 text-xl font-medium text-gray-600">
                <span class="text-yellow-500 mr-1">&#9733;</span> 4.7 <span class="text-sm ml-2">(25 Ulasan)</span>
                <span class="mx-3 text-gray-400">|</span>
                <span class="text-kumpul-main">RW 05, Kelurahan Sukamaju, Kec. Bojong</span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-10">
            <img src="https://picsum.photos/800/600?random=104&mainhall" alt="Foto Utama Aula" class="col-span-1 md:col-span-2 lg:col-span-2 h-96 w-full object-cover rounded-xl shadow-lg">
            <img src="https://picsum.photos/400/300?random=105&interior" alt="Interior Aula" class="h-48 w-full object-cover rounded-xl shadow-md">
            <img src="https://picsum.photos/400/300?random=106&toilet" alt="Fasilitas Toilet" class="h-48 w-full object-cover rounded-xl shadow-md">
            <img src="https://picsum.photos/400/300?random=107&kitchen" alt="Area Dapur" class="h-48 w-full object-cover rounded-xl shadow-md">
            <img src="https://picsum.photos/400/300?random=108&exterior" alt="Tampak Luar" class="h-48 w-full object-cover rounded-xl shadow-md">
            <button class="bg-gray-200 text-gray-700 hover:bg-gray-300 rounded-xl shadow-md h-48">
                Lihat Semua Foto (15)
            </button>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <div class="lg:col-span-2 space-y-10">
                
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Deskripsi Ruang</h2>
                    <p class="text-gray-700 leading-relaxed">
                        Aula Serbaguna Graha Warga RW 05 adalah fasilitas publik yang modern dan terawat. Sangat cocok untuk berbagai acara komunitas, mulai dari pernikahan sederhana, rapat warga bulanan, hingga pameran seni lokal. Kapasitas maksimum 150 orang duduk, dengan akses mudah dari jalan utama. Kami berkomitmen menyediakan ruang yang inklusif dan terjangkau untuk semua warga.
                    </p>
                    <p class="text-gray-700 leading-relaxed mt-3">
                        Pengelolaan dilakukan oleh Pengurus RW 05. Harap lakukan konfirmasi reservasi minimal 7 hari sebelum tanggal acara.
                    </p>
                </div>
                
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Fasilitas Termasuk</h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-sm">
                        <div class="flex items-center space-x-2 text-kumpul-main">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9.25 10M11.75 17L11.25 10M14.75 17L14.25 10M18 10h-8M10 18V8a2 2 0 012-2h4a2 2 0 012 2v10a2 2 0 01-2 2h-4a2 2 0 01-2-2z"></path></svg>
                            <span>Proyektor & Layar</span>
                        </div>
                        <div class="flex items-center space-x-2 text-kumpul-main">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9 9 0 008.354-5.646z"></path></svg>
                            <span>AC Dingin</span>
                        </div>
                        <div class="flex items-center space-x-2 text-kumpul-main">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-5"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 4V3M16 4V3M18 8H6M2 12h20M7 16h10M4 20h16a2 2 0 002-2V6a2 2 0 00-2-2H4a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span>Kursi & Meja (150 set)</span>
                        </div>
                        <div class="flex items-center space-x-2 text-kumpul-main">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v-2"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"></path></svg>
                            <span>Akses WiFi Cepat</span>
                        </div>
                        <div class="flex items-center space-x-2 text-kumpul-main">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h10M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <span>Sound System Standar</span>
                        </div>
                        <div class="flex items-center space-x-2 text-kumpul-main">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                            <span>Area Parkir Luas</span>
                        </div>
                    </div>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Ulasan Komunitas (25)</h2>
                    
                    <div class="p-4 bg-white border border-gray-200 rounded-lg mb-4">
                        <div class="flex justify-between items-center">
                            <p class="font-semibold text-gray-900">Bagus S. | Karang Taruna</p>
                            <span class="text-yellow-500 font-bold">5.0 &#9733;</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">"Ruangannya bersih dan AC-nya dingin sekali! Sangat nyaman untuk rapat kerja bakti kemarin. Proses booking lewat Kumpul.in juga cepat."</p>
                        <span class="text-xs text-gray-400 mt-2 block">Dipublikasikan 2 minggu lalu</span>
                    </div>

                    <div class="p-4 bg-white border border-gray-200 rounded-lg">
                        <div class="flex justify-between items-center">
                            <p class="font-semibold text-gray-900">Ibu Rina | PKK</p>
                            <span class="text-yellow-500 font-bold">4.0 &#9733;</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">"Fasilitasnya lengkap, hanya saja area parkir kadang penuh saat ada acara besar di luar. Pengelola sangat ramah."</p>
                        <span class="text-xs text-gray-400 mt-2 block">Dipublikasikan 1 bulan lalu</span>
                    </div>

                    <a href="#" class="mt-4 text-kumpul-main font-semibold block">Lihat Semua Ulasan &rarr;</a>
                </div>

            </div>
            
            <div class="lg:col-span-1">
                <div class="sticky top-20 p-6 bg-white rounded-xl shadow-2xl border border-kumpul-main/20">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Form Reservasi Ruang</h2>
                    
                    <div class="bg-kumpul-light p-3 rounded-lg mb-4">
                        <p class="text-sm font-semibold text-kumpul-main">
                            Perhatian: Kumpul.in hanya memfasilitasi *booking* dan konfirmasi. <span class="underline">Pembayaran dilakukan manual</span> ke pengelola fasilitas.
                        </p>
                    </div>

                    <form class="space-y-4">
                        
                        <div>
                            <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal Acara</label>
                            <input type="date" id="tanggal" value="2025-11-15" class="mt-1 w-full p-2 border border-gray-300 rounded-lg focus:ring-kumpul-main focus:border-kumpul-main" required>
                            <p class="text-xs text-red-500 mt-1">Tanggal 15 November sudah terisi penuh (Lihat Kalender).</p>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="mulai" class="block text-sm font-medium text-gray-700">Waktu Mulai</label>
                                <input type="time" id="mulai" value="08:00" class="mt-1 w-full p-2 border border-gray-300 rounded-lg focus:ring-kumpul-main focus:border-kumpul-main" required>
                            </div>
                            <div>
                                <label for="selesai" class="block text-sm font-medium text-gray-700">Waktu Selesai</label>
                                <input type="time" id="selesai" value="12:00" class="mt-1 w-full p-2 border border-gray-300 rounded-lg focus:ring-kumpul-main focus:border-kumpul-main" required>
                            </div>
                        </div>

                        <div>
                            <label for="kegiatan" class="block text-sm font-medium text-gray-700">Jenis Kegiatan</label>
                            <select id="kegiatan" class="mt-1 w-full p-2 border border-gray-300 rounded-lg focus:ring-kumpul-main focus:border-kumpul-main" required>
                                <option>Rapat Warga</option>
                                <option>Pernikahan</option>
                                <option>Latihan Komunitas</option>
                                <option>Lainnya...</option>
                            </select>
                        </div>

                        <div>
                            <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap Pemesan</label>
                            <input type="text" id="nama" placeholder="Contoh: Budi Santoso (RT 01)" class="mt-1 w-full p-2 border border-gray-300 rounded-lg focus:ring-kumpul-main focus:border-kumpul-main" required>
                        </div>
                        
                        <button type="submit" class="w-full py-3 bg-red-500 text-white rounded-lg font-semibold shadow-md hover:bg-red-600 transition" disabled>
                            Reservasi Penuh (Ganti Tanggal)
                        </button>
                        <p class="text-center text-xs text-gray-500 pt-2">
                            Setelah reservasi diajukan, Pengelola akan menghubungi Anda untuk konfirmasi pembayaran.
                        </p>
                    </form>
                </div>
            </div>
            
        </div>
    </main>

    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center pt-8 border-t border-gray-800">
                <p class="text-sm text-gray-500">
                    &copy; 2025 Kumpul.in. Didedikasikan untuk Komunitas Lokal.
                </p>
            </div>
        </div>
    </footer>
    
</body>
</html>