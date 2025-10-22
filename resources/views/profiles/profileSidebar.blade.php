<div class="sidebar flex border border-gray-300 w-[280px] p-5 h-full relative">
    <div class="menu-item w-full">
        <div class="items flex flex-col space-y-2 pt-16">
            
            {{-- Ganti <button> menjadi <a> dengan rute yang benar --}}
            <a href="{{ route('profile.index') }}" class="px-4 py-2 rounded-lg text-gray-700 hover:bg-violet-600 hover:text-white transition duration-150 {{ Request::routeIs('profile.index') ? 'bg-violet-700 text-white' : '' }}">
                Profile
            </a>
            
            <a href="{{ route('profile.reservasi') }}" class="px-4 py-2 rounded-lg text-gray-700 hover:bg-violet-600 hover:text-white transition duration-150 {{ Request::routeIs('profile.reservasi') ? 'bg-violet-700 text-white' : '' }}">
                Reservasi Saya
            </a>
            
            {{-- <a href="{{ route('profile.transaksi') }}" class="px-4 py-2 rounded-lg text-gray-700 hover:bg-violet-600 hover:text-white transition duration-150 {{ Request::routeIs('profile.transaksi') ? 'bg-violet-700 text-white' : '' }}">
                Transaksi
            </a> --}}
            
            {{-- ... Tambahkan item menu lainnya di sini ... --}}
            
        </div>
    </div>
</div>