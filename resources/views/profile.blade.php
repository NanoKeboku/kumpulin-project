<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="wrap flex flex-row h-screen">
    <div class="sidebar flex border-2 w-[280px] p-5 h-full relative justify-center">
        <div class="logo"></div>
        <div class="menu-item">
            <div class="items flex flex-col">
                <button>
                    Profile
                </button>
                <button>
                    Reservasi Saya
                </button>
                <button>
                    Transaksi
                </button>
                <button>
                    Favorit
                </button>
                <button>
                    Pengaturan Akun
                </button>
                <button>
                    Notifikasi
                </button>
            </div>
        </div>
    </div>
    <main class="p-5">
        <div class="user-item">
            <div class="user-img">
                <img src="" alt="">
                <button>Edit Image</button>
            </div>
            <div class="personal">
                <div class="name">
                    <label for="">Nama Lengkap</label>
                    <p>Nama Lengkap</p>
                </div>
                <div class="phone">
                    <label for="">No HP</label>
                    <p>Nomor HP</p>
                </div>
                <div class="alamat">
                    <label for="">Alamat</label>
                    <p>Alamata</p>
                </div>
                <button>Edit Profile</button>
            </div>
        </div>
    </main>
    </div>

</body>
</html>