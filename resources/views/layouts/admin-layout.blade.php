<?php
$user = Illuminate\Support\Facades\Auth::user();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">

        <!--==================== BOOTSTRAP ====================-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--==================== UNICONS ====================-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/headers.css') }}">
        @yield('styles')
        <title>@yield('title')</title>
    </head>
    <body>
        <header class="admin_header">
            <nav class="navbar d-flex justify-content-between shadow w-100">
                <button id="menu-toggler" data-class="menu-active" class="hamburger btn">
                    <i class="uil uil-bars text-light"></i>
                </button>
                <div class="mx-3"><a href="/home"><img class="logo" src="/images/logo.jpg" alt="LOGO"></a></div>
                <div class="push-left mx-5">
                    <!--  Menu compatible with wp_nav_menu  -->

                    <ul id="primary-menu" class="menu nav-menu d-flex align-items-center list-unstyled">
                        <li class="menu-item current-menu-item m-2"><a class="header_links nav__link text-light" href="/search"><i class="uil uil-search"></i></a></li>
                        @if(!Request::is('users*'))<li class="menu-item m-2"><a class="header_links nav__link text-light text-decoration-none" href="/users">Usuarios</a></li>@endif
                        @if(!Request::is('songs*'))<li class="menu-item m-2"><a class="header_links nav__link text-light text-decoration-none" href="/songs">Canciones</a></li>@endif
                        @if(!Request::is('playlists*'))<li class="menu-item m-2"><a class="header_links nav__link text-light text-decoration-none" href="/playlists">Playlists</a></li>@endif
                        <li class="menu-item m-2"><a class="header_links nav__link text-light text-decoration-none" href="/profile">Perfil</a></li>
                        <li class="menu-item m-2"><a class="header_links nav__link text-light text-decoration-none" href="/logout">Cerrar Sesi&oacute;n</a></li>
                        <li class="menu-item m-2"><a class="header_links nav__link profile-image" href="/profile"><img class="header_profile_img" title="Header Profile" alt="Header Profile" src="/{{$user->foto}}"></a></li>
                    </ul>
                    <a class="nav__link profile-image d-none responsive-profile-image" href="/profile"><img class="header_profile_img" title="Header Profile" alt="Header Profile" src="/{{$user->foto}}"></a>
                </div>
            </nav>
        </header>
        <main>
            @yield('mainContent')
        </main>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
