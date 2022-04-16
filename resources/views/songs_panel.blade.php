<?php
    $user = Illuminate\Support\Facades\Auth::user();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="{{ asset('css/songs_panel_style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/headers.css') }}" rel="stylesheet">
        <!--<script src="../js/jquery-3.6.0.min.js"></script>-->
        <title>Panel de Canciones</title>
    </head>

    <body>
        <!-- Header Section -->
        <header class="admin_headers">
            <img class="burguer_logo" src="images/burguermenu.jpg"> <!-- Movil -->

            <img class="logo" src="images/logo.jpg">

            <!-- PC -->
            <div class="admin_headers_nav_div">
                <a class="header_links" href="/search"> <img class="header_lupa" title="Header Lupa" alt="Header Lupa" src="images/lupa.jpg"></a>
                <a class="header_links" href="/usersongs"> Canciones</a>
                <a class="header_links" href="/userplaylists"> Playlists</a>
                <a class="header_links" href="/profile"> Perfil</a>
                <a class="header_links" href="/logout"> Cerrar Sesión</a>
                <a class="header_links" href="/profile"> <img class="header_profile_img" title="Header Profile" alt="Header Profile" src="{{$user -> foto}}"></a>
            </div>

            <!-- Movil -->
            <div class="mobile_admin_headers_nav_div">
                <a class="header_links" href="#"> <img class="header_profile_img" title="Header Profile" alt="Header Profile" src="{{$user -> foto}}"></a>
            </div>
        </header>

        <hr class="hr">

        <!--------- Songs - Browser ----------------->
        <section class="subheaders_section">
            <header class="subheaders">
                <h2 class="subheaders_titles"> Canciones </h2>
                <h2 class="mobile_subheaders_titles"> QUIZ&Aacute;S TE GUSTEN... </h2> <!--Movil-->
                <hr class="mobile_subheaders_hr"> <!--Movil-->
            </header>

            <div class="subheaders_browser_div">
                <input class="browser_input" type="text" placeholder="Search...">
            </div>
        </section>

        <!-- Songs Section -->
        <section class="songs_section">

            <div class="song_div">
                <img class="song_img" title="User Image" alt="User Image" src="images/song.jpg">
                <div class="song_text_div">
                    <p class="song_name_text">T&Iacute;TULO CANCI&Oacute;N</p>
                    <p class="song_album_text">Album</p>
                    <p class="song_artist_text">ARTISTAS</p>
                    <p class="song_duration_text">3:18</p>
                </div>
            </div>

            <div class="song_div">
                <img class="song_img" title="User Image" alt="User Image" src="images/song.jpg">
                <div class="song_text_div">
                    <p class="song_name_text">T&Iacute;TULO CANCI&Oacute;N</p>
                    <p class="song_album_text">Album</p>
                    <p class="song_artist_text">ARTISTAS</p>
                    <p class="song_duration_text">3:18</p>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
