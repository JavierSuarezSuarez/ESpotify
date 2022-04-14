<?php
    $user = Illuminate\Support\Facades\Auth::user();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="{{ asset('css/admin_users_panel_style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/headers.css') }}" rel="stylesheet">
        <!--<script src="../js/jquery-3.6.0.min.js"></script>-->
        <title>Panel de Usuarios</title>
    </head>

    <body>
        <!-- Header Section -->
        <header class="admin_headers">
            <img class="logo" src="images/logo.jpg">

            <div class="admin_headers_nav_div">
                <a class="header_links" href="/search"> <img class="header_lupa" title="Header Lupa" alt="Header Lupa" src="images/lupa.jpg"></a>
                <a class="header_links" href="/songs"> Canciones</a>
                <a class="header_links" href="/playlists"> Playlists</a>
                <a class="header_links" href="/profile"> Perfil</a>
                <a class="header_links" href="/logout"> Cerrar Sesi&oacute;n</a>
                <a class="header_links" href="/profile"> <img class="header_profile_img" title="Header Profile" alt="Header Profile" src="{{$user -> foto}}"></a>
            </div>
        </header>

        <hr class="hr">

        <!-- Users - Browser - Add User Subheader Section -->
        <section class="subheaders_section">

            <header class="subheaders">
                <h2 class="subheaders_titles"> Usuarios </h2>
            </header>

            <div class="subheaders_browser_div">
                <input class="browser_input" type="text" placeholder="Search...">
            </div>

            <div class="subheaders_btn_div">
                <img class="subheaders_btn_image" src="images/addbtn.jpg" title="Add Button Image" alt="Add Button Image">
                <a class="subheaders_link" href="#">A&ntilde;adir Usuario </a>
            </div>

        </section>

        <!-- Users Section -->
        <section class="users_section">
            @foreach($users as $user)
                <div class="user_div">
                    <img class="user_img" title="User Image" alt="User Image" src="{{$user -> foto}}">
                    <p class="user_name_text">{{$user -> nombre}} {{$user -> apellidos}}</p>

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
