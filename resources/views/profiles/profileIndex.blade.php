 @extends('profiles.profileLayout')
 @section('title', 'sidebar')
 @section('main-profile')
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
    @endsection