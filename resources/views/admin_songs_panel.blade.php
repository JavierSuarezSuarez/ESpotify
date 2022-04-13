<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="{{ asset('css/songs_panel_style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/headers.css') }}" rel="stylesheet">
        <!--<script src="../js/jquery-3.6.0.min.js"></script>-->
        <title>Panel de Administrador de Canciones</title>
    </head>

    <body>
        <!-- Header Section -->
        <header class="admin_headers">
            <img class="logo" src="images/logo.jpg">

            <div class="admin_headers_nav_div">
                <a class="header_links" href="#"> <img class="header_lupa" title="Header Lupa" alt="Header Lupa" src="images/lupa.jpg"></a>
                <a class="header_links" href="#"> Usuarios</a>
                <a class="header_links" href="#"> Playlists</a>
                <a class="header_links" href="#"> Perfil</a>
                <a class="header_links" href="#"> Cerrar Sesión</a>
                <a class="header_links" href="#"> <img class="header_profile_img" title="Header Profile" alt="Header Profile" src="images/profile.png"></a>
            </div>
        </header>

        <hr class="hr">

        <!-- Songs - Browser - Add Song Subheader Section -->
        <section class="subheaders_section">
            <header class="subheaders">
                <h2 class="subheaders_titles"> Canciones </h2>
            </header>

            <div class="subheaders_browser_div">
                <input class="browser_input" type="text" placeholder="Search...">
            </div>

            <div class="subheaders_btn_div">
                <img class="subheaders_btn_image" src="images/addbtn.jpg" title="Add Button Image" alt="Add Button Image">
                <a class="subheaders_link" href="#">A&ntilde;adir Canci&oacute;n </a>
            </div>
        </section>


        <!-- Songs Section -->
        <section class="songs_section">
            @foreach($songs as $song)
                <div class="song_div">
                    <img class="song_img" title="Song Image" alt="Song Image" src="{{$song -> imagen}}">
                    <div class="song_text_div">
                        <p class="song_name_text">{{$song -> nombre}}</p>
                        <p class="song_album_text">{{$song -> album}}</p>
                        <p class="song_artist_text">{{$song -> artistas}}</p>
                    </div>

                    <div class="edit_delete_btns">
                        <button class="edit_btn">
                            <img  class="edit_btn_img" title="Edit" alt="Edit" src="images/editbtn.png">
                        </button>

                        <button class="delete_btn" type="button">
                            <img class="delete_btn_img" title="Delete" alt="Delete" src="images/deletebtn.png">
                        </button>
                    </div>
                </div>
            @endforeach
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
