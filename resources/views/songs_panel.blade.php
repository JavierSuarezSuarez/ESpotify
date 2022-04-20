<?php
$user = Illuminate\Support\Facades\Auth::user();
?>
@extends('layouts/registered-user-layout')

@section('styles')
    <link href="{{ asset('css/songs_panel_style.css') }}" rel="stylesheet">
@stop

@section('mainContent')

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
            <a href="#"> <img class="song_img" title="User Image" alt="User Image" src="images/song.jpg"></a>
            <div class="song_text_div">
                <a href="#" class="song_name_text">T&Iacute;TULO CANCI&Oacute;N</a>
                <p class="song_album_text">Album</p>
                <p class="song_artist_text">ARTISTAS</p>
                <p class="song_duration_text">3:18</p>
            </div>
        </div>

        <div class="song_div">
            <a href="#"> <img class="song_img" title="User Image" alt="User Image" src="images/song.jpg"></a>
            <div class="song_text_div">
                <a href="#" class="song_name_text">T&Iacute;TULO CANCI&Oacute;N</a>
                <p class="song_album_text">Album</p>
                <p class="song_artist_text">ARTISTAS</p>
                <p class="song_duration_text">3:18</p>
            </div>
        </div>
    </section>
@endsection
