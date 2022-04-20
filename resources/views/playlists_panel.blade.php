<?php
$user = Illuminate\Support\Facades\Auth::user();
?>
@extends('layouts/admin-layout')

@section('styles')
    <link href="{{ asset('css/playlists_panel_style.css') }}" rel="stylesheet">
@stop

@section('mainContent')
    <!-- My Playlists - Browser - Add Playlist Subheader Section -->
    <section class="subheaders_section">

        <header class="subheaders">
            <h2 class="subheaders_titles"> Mis Playlists</h2>
            <h2 class="mobile_subheaders_titles"> MIS PLAYLISTS </h2> <!--Movil-->
            <hr class="mobile_subheaders_hr"> <!--Movil-->
        </header>

        <div class="subheaders_browser_div">
            <input class="browser_input" type="text" placeholder="Search...">
        </div>

        <div class="subheaders_btn_div">
            <img class="subheaders_btn_image" src="images/addbtn.jpg" title="Add Button Image" alt="Add Button Image">
            <a class="subheaders_link" href="#">A&ntilde;adir Playlist </a>
        </div>

    </section>

    <!-- Playlists Section -->
    <section class="playlists_section">

        <div class="playlist_div">
            <a href="#"> <img class="playlist_img" title="Playlist Image" alt="Playlist Image" src="images/playlist.jpg"></a>
            <p class="playlist_name_text">TITULO DE PLAYLIST</p>
            <p class="createdby_text">CREADA POR: USUARIO</p>
            <p class="datesongnumber_text">DD/mm/YYYY - X CANCIONES</p>
            <p class="followers_text"> FOLLOWERS: 200.000  </p>

            <!--Movil-->
            <div class="playlist_text_div">
                <p class="mobile_playlist_name_text">TITULO DE PLAYLIST</p>
                <p class="mobile_createdby_text">CREADA POR: USUARIO</p>
                <p class="mobile_datesongnumber_text">DD/mm/YYYY - X CANCIONES</p>
                <p class="mobile_followers_text"> FOLLOWERS: 200.000  </p>
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

        <div class="playlist_div">
            <a href="#"> <img class="playlist_img" title="Playlist Image" alt="Playlist Image" src="images/playlist.jpg"></a>
            <p class="playlist_name_text">TITULO DE PLAYLIST</p>
            <p class="createdby_text">CREADA POR: USUARIO</p>
            <p class="datesongnumber_text">DD/mm/YYYY - X CANCIONES</p>
            <p class="followers_text"> FOLLOWERS: 200.000  </p>

            <!--Movil-->
            <div class="playlist_text_div">
                <p class="mobile_playlist_name_text">TITULO DE PLAYLIST</p>
                <p class="mobile_createdby_text">CREADA POR: USUARIO</p>
                <p class="mobile_datesongnumber_text">DD/mm/YYYY - X CANCIONES</p>
                <p class="mobile_followers_text"> FOLLOWERS: 200.000  </p>
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

        <div class="playlist_div">
            <a href="#"> <img class="playlist_img" title="Playlist Image" alt="Playlist Image" src="images/playlist.jpg"></a>
            <p class="playlist_name_text">TITULO DE PLAYLIST</p>
            <p class="createdby_text">CREADA POR: USUARIO</p>
            <p class="datesongnumber_text">DD/mm/YYYY - X CANCIONES</p>
            <p class="followers_text"> FOLLOWERS: 200.000  </p>

            <!--Movil-->
            <div class="playlist_text_div">
                <p class="mobile_playlist_name_text">TITULO DE PLAYLIST</p>
                <p class="mobile_createdby_text">CREADA POR: USUARIO</p>
                <p class="mobile_datesongnumber_text">DD/mm/YYYY - X CANCIONES</p>
                <p class="mobile_followers_text"> FOLLOWERS: 200.000  </p>
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

        <div class="playlist_div">
            <a href="#"> <img class="playlist_img" title="Playlist Image" alt="Playlist Image" src="images/playlist.jpg"></a>
            <p class="playlist_name_text">TITULO DE PLAYLIST</p>
            <p class="createdby_text">CREADA POR: USUARIO</p>
            <p class="datesongnumber_text">DD/mm/YYYY - X CANCIONES</p>
            <p class="followers_text"> FOLLOWERS: 200.000  </p>

            <!--Movil-->
            <div class="playlist_text_div">
                <p class="mobile_playlist_name_text">TITULO DE PLAYLIST</p>
                <p class="mobile_createdby_text">CREADA POR: USUARIO</p>
                <p class="mobile_datesongnumber_text">DD/mm/YYYY - X CANCIONES</p>
                <p class="mobile_followers_text"> FOLLOWERS: 200.000  </p>
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

        <div class="playlist_div">
            <a href="#"> <img class="playlist_img" title="Playlist Image" alt="Playlist Image" src="images/playlist.jpg"></a>
            <p class="playlist_name_text">TITULO DE PLAYLIST</p>
            <p class="createdby_text">CREADA POR: USUARIO</p>
            <p class="datesongnumber_text">DD/mm/YYYY - X CANCIONES</p>
            <p class="followers_text"> FOLLOWERS: 200.000  </p>

            <!--Movil-->
            <div class="playlist_text_div">
                <p class="mobile_playlist_name_text">TITULO DE PLAYLIST</p>
                <p class="mobile_createdby_text">CREADA POR: USUARIO</p>
                <p class="mobile_datesongnumber_text">DD/mm/YYYY - X CANCIONES</p>
                <p class="mobile_followers_text"> FOLLOWERS: 200.000  </p>
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
    </section>
@endsection
