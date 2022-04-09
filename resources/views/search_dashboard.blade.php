<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="{{ asset('css/search_dashboard_style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/headers.css') }}" rel="stylesheet">
        <!--<script src="../js/jquery-3.6.0.min.js"></script>-->
        <title>Panel de B&uacute;squeda</title>
    </head>

    <body>
        <!-- Header Section -->
        <header class="admin_headers">
            <img class="logo" src="images/logo.jpg">

            <div class="admin_headers_nav_div">
                <a class="header_links" href="#"> <img class="header_lupa" title="Header Lupa" alt="Header Lupa" src="images/lupa.jpg"></a>
                <a class="header_links" href="#"> Canciones</a>
                <a class="header_links" href="#"> Playlists</a>
                <a class="header_links" href="#"> Perfil</a>
                <a class="header_links" href="#"> Cerrar Sesión</a>
                <a class="header_links" href="#"> <img class="header_profile_img" title="Header Profile" alt="Header Profile" src="images/profile.png"></a>
            </div>
        </header>

        <hr class="hr">

        <!-- Browser -->
        <section class="subheaders_section">

            <div class="subheaders_browser_div">
                <input class="browser_input" type="text" placeholder="Search...">
            </div>
        </section>


        <!-- Browser Results Section -->
        <section class="results_section">

            <div class="playlist_div">
                <img class="playlist_img" title="Playlist Image" alt="Playlist Image" src="images/playlist.jpg">
                <div class="playlist_text_div">
                    <p class="playlist_name_text">TITULO DE PLAYLIST</p>
                    <p class="createdby_text">CREADA POR: USUARIO</p>
                    <p class="datesongnumber_text">DD/mm/YYYY - X CANCIONES</p>
                    <p class="followers_text"> FOLLOWERS: 200.000  </p>
                </div>
            </div>

            <div class="song_div">
                <img class="song_img" title="User Image" alt="User Image" src="images/song.jpg">
                <div class="song_text_div">
                    <p class="song_name_text">T&Iacute;TULO CANCI&Oacute;N</p>
                    <p class="song_artist_text">ARTISTAS</p>
                </div>
            </div>

            <div class="playlist_div">
                <img class="playlist_img" title="Playlist Image" alt="Playlist Image" src="images/playlist.jpg">
                <div class="playlist_text_div">
                    <p class="playlist_name_text">TITULO DE PLAYLIST</p>
                    <p class="createdby_text">CREADA POR: USUARIO</p>
                    <p class="datesongnumber_text">DD/mm/YYYY - X CANCIONES</p>
                    <p class="followers_text"> FOLLOWERS: 200.000  </p>
                </div>
            </div>

            <div class="playlist_div">
                <img class="playlist_img" title="Playlist Image" alt="Playlist Image" src="images/playlist.jpg">
                <div class="playlist_text_div">
                    <p class="playlist_name_text">TITULO DE PLAYLIST</p>
                    <p class="createdby_text">CREADA POR: USUARIO</p>
                    <p class="datesongnumber_text">DD/mm/YYYY - X CANCIONES</p>
                    <p class="followers_text"> FOLLOWERS: 200.000  </p>
                </div>
            </div>

            <div class="song_div">
                <img class="song_img" title="User Image" alt="User Image" src="images/song.jpg">
                <div class="song_text_div">
                    <p class="song_name_text">T&Iacute;TULO CANCI&Oacute;N</p>
                    <p class="song_artist_text">ARTISTAS</p>
                </div>
            </div>

            <div class="song_div">
                <img class="song_img" title="User Image" alt="User Image" src="images/song.jpg">
                <div class="song_text_div">
                    <p class="song_name_text">T&Iacute;TULO CANCI&Oacute;N</p>
                    <p class="song_artist_text">ARTISTAS</p>
                </div>
            </div>

        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
