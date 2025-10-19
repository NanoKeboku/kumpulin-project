<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jelajahi Ruang - Kumpul.in</title>
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
    <style>
        /* Card Hover Animation (Clean Lift) */
        .card-lift-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-lift-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.08);
        }
    </style>
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
                    
                    <a href="#" class="text-kumpul-main font-bold border-b-2 border-kumpul-main">Jelajahi Ruang</a>
                    <a href="#" class="text-gray-600 hover:text-kumpul-main transition">Daftarkan Ruang</a>
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
        
        <h1 class="text-3xl font-extrabold text-gray-900 mb-6">
            Jelajahi Ruang Komunitas
        </h1>
        <p class="text-gray-600 mb-8">
            Menampilkan **12** ruang yang tersedia di area **Kecamatan Bojong** dan sekitarnya.
        </p>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            
            <aside class="lg:col-span-1 p-6 bg-white rounded-xl shadow-lg h-fit sticky top-20">
                <h2 class="text-xl font-bold text-gray-900 mb-4 border-b pb-3">Filter Pencarian</h2>
                
                <form class="space-y-6">
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Jenis Ruang</label>
                        <div class="space-y-2">
                            <label class="flex items-center text-sm">
                                <input type="checkbox" class="form-checkbox text-kumpul-main rounded" checked>
                                <span class="ml-2">Aula Serbaguna (4)</span>
                            </label>
                            <label class="flex items-center text-sm">
                                <input type="checkbox" class="form-checkbox text-kumpul-main rounded">
                                <span class="ml-2">Lapangan Olahraga (3)</span>
                            </label>
                            <label class="flex items-center text-sm">
                                <input type="checkbox" class="form-checkbox text-kumpul-main rounded">
                                <span class="ml-2">Studio Kreatif (2)</span>
                            </label>
                            <label class="flex items-center text-sm">
                                <input type="checkbox" class="form-checkbox text-kumpul-main rounded">
                                <span class="ml-2">Ruang Rapat (3)</span>
                            </label>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Kapasitas (Orang)</label>
                        <input type="range" min="10" max="200" value="100" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer range-sm accent-kumpul-main">
                        <div class="flex justify-between text-xs mt-1 text-gray-500">
                            <span>10</span>
                            <span>Maks. 100</span>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Fasilitas</label>
                        <div class="space-y-2">
                            <label class="flex items-center text-sm">
                                <input type="checkbox" class="form-checkbox text-kumpul-main rounded" checked>
                                <span class="ml-2">Proyektor / TV</span>
                            </label>
                            <label class="flex items-center text-sm">
                                <input type="checkbox" class="form-checkbox text-kumpul-main rounded">
                                <span class="ml-2">AC</span>
                            </label>
                            <label class="flex items-center text-sm">
                                <input type="checkbox" class="form-checkbox text-kumpul-main rounded">
                                <span class="ml-2">Toilet Bersih</span>
                            </label>
                        </div>
                    </div>
                    
                    <button type="submit" class="w-full py-2 bg-kumpul-main text-white rounded-lg font-semibold hover:bg-kumpul-accent transition">
                        Terapkan Filter
                    </button>
                </form>
            </aside>

            {{-- CARD --}}
            
            <div class="lg:col-span-3 space-y-6">
                <a href="{{ route('detail')}}" class="block bg-white rounded-xl shadow-lg overflow-hidden flex flex-col md:flex-row card-lift-hover">
                    <img src="https://picsum.photos/300/220?random=101&hall" alt="Aula Serbaguna RW 05" class="w-full md:w-64 h-48 md:h-auto object-cover flex-shrink-0">
                    <div class="p-6 flex-grow">
                        <div class="flex justify-between items-start">
                            <h3 class="text-xl font-bold text-gray-900">Aula Serbaguna RW 05 - Graha Warga</h3>
                            <div class="flex items-center text-kumpul-accent font-bold text-lg">
                                4.7 <span class="text-yellow-500 ml-1">&#9733;</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">Jl. Mawar No. 12, Kelurahan Sukamaju, Kec. Bojong.</p>
                        
                        <div class="mt-4 flex flex-wrap gap-3 text-xs">
                            <span class="px-3 py-1 bg-kumpul-light text-kumpul-main font-medium rounded-full">Kapasitas 150 Orang</span>
                            <span class="px-3 py-1 bg-kumpul-light text-kumpul-main font-medium rounded-full">Proyektor</span>
                            <span class="px-3 py-1 bg-kumpul-light text-kumpul-main font-medium rounded-full">Parkir Luas</span>
                        </div>

                        <div class="mt-4 pt-4 border-t border-gray-100 flex justify-between items-center">
                            <span class="text-lg font-bold text-gray-900">Harga: Hubungi Pengelola</span>
                            <span class="text-kumpul-main font-semibold">Lihat Detail &rarr;</span>
                        </div>
                    </div>
                </a>

                <a href="detail_ruang.html" class="block bg-white rounded-xl shadow-lg overflow-hidden flex flex-col md:flex-row card-lift-hover">
                    <img src="https://picsum.photos/300/220?random=102&futsal" alt="Lapangan Futsal Komunal" class="w-full md:w-64 h-48 md:h-auto object-cover flex-shrink-0">
                    <div class="p-6 flex-grow">
                        <div class="flex justify-between items-start">
                            <h3 class="text-xl font-bold text-gray-900">Lapangan Futsal Komunal RT 02</h3>
                            <div class="flex items-center text-kumpul-accent font-bold text-lg">
                                4.9 <span class="text-yellow-500 ml-1">&#9733;</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">Samping Balai Warga, RT 02/RW 03, Kel. Sinar Jaya.</p>
                        
                        <div class="mt-4 flex flex-wrap gap-3 text-xs">
                            <span class="px-3 py-1 bg-kumpul-light text-kumpul-main font-medium rounded-full">Bisa Sewa Per Jam</span>
                            <span class="px-3 py-1 bg-kumpul-light text-kumpul-main font-medium rounded-full">Lampu Malam</span>
                            <span class="px-3 py-1 bg-kumpul-light text-kumpul-main font-medium rounded-full">Kantin Kecil</span>
                        </div>

                        <div class="mt-4 pt-4 border-t border-gray-100 flex justify-between items-center">
                            <span class="text-lg font-bold text-gray-900">Mulai dari Rp 50.000/jam</span>
                            <span class="text-kumpul-main font-semibold">Lihat Detail &rarr;</span>
                        </div>
                    </div>
                </a>

                <a href="detail_ruang.html" class="block bg-white rounded-xl shadow-lg overflow-hidden flex flex-col md:flex-row card-lift-hover">
                    <img src="https://picsum.photos/300/220?random=103&art" alt="Studio Kreatif" class="w-full md:w-64 h-48 md:h-auto object-cover flex-shrink-0">
                    <div class="p-6 flex-grow">
                        <div class="flex justify-between items-start">
                            <h3 class="text-xl font-bold text-gray-900">Studio Seni Rupa "Titik Kumpul"</h3>
                            <div class="flex items-center text-kumpul-accent font-bold text-lg">
                                4.5 <span class="text-yellow-500 ml-1">&#9733;</span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">Jalan Utama No. 45 (Dekat Pasar), Kec. Bojong.</p>
                        
                        <div class="mt-4 flex flex-wrap gap-3 text-xs">
                            <span class="px-3 py-1 bg-kumpul-light text-kumpul-main font-medium rounded-full">Kapasitas 20 Orang</span>
                            <span class="px-3 py-1 bg-kumpul-light text-kumpul-main font-medium rounded-full">Lampu Studio</span>
                            <span class="px-3 py-1 bg-kumpul-light text-kumpul-main font-medium rounded-full">AC</span>
                        </div>

                        <div class="mt-4 pt-4 border-t border-gray-100 flex justify-between items-center">
                            <span class="text-lg font-bold text-gray-900">Hubungi Pengelola</span>
                            <span class="text-kumpul-main font-semibold">Lihat Detail &rarr;</span>
                        </div>
                    </div>
                </a>

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