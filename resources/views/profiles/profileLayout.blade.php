<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Kumpul.in Profile')</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="wrap flex flex-row h-screen">
        
        @include('profiles.profileSidebar') 
        
        <main class="flex-grow p-10 overflow-y-auto">
            @yield('main-profile') 
        </main>
        
    </div>
</body>
</html>