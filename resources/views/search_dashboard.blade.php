<?php
$user = Illuminate\Support\Facades\Auth::user();
?>
@extends('layouts/admin-layout')

@section('styles')
    <link href="{{ asset('css/search_dashboard_style.css') }}" rel="stylesheet">
@stop

@section('mainContent')

        <!-- Browser -->
        <section class="subheaders_section d-flex justify-content-between align-items-center">
            <form class="form-inline d-flex justify-content-between align-items-center search-bar">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn my-2 my-sm-0 text-light" type="submit"><i class="uil uil-search"></i></button>
            </form>
        </section>


        <!-- Browser Results Section -->
        <section class="results_section d-flex flex-column">
            <div class="result_div d-flex">
                <a href="#"><img class="result_img" title="Playlist Image" alt="Playlist Image" src="images/playlist.jpg"></a>
                <div class="playlist_text_div">
                    <a href="#" class="playlist_name_text text-light text-decoration-none"><h2>TITULO DE PLAYLIST</h2></a>
                    <p class="createdby_text text-light">CREADA POR: USUARIO</p>
                    <p class="datesongnumber_text  text-light">DD/mm/YYYY - X CANCIONES</p>
                    <p class="followers_text  text-light"> FOLLOWERS: 200.000  </p>
                </div>
            </div>

            <div class="result_div d-flex">
                <a href="#"><img class="result_img" title="Playlist Image" alt="Playlist Image" src="images/song.jpg"></a>
                <div class="playlist_text_div">
                    <a href="#" class="playlist_name_text text-light text-decoration-none"><h2>TITULO DE PLAYLIST</h2></a>
                    <p class="createdby_text text-light">CREADA POR: USUARIO</p>
                    <p class="datesongnumber_text  text-light">DD/mm/YYYY - X CANCIONES</p>
                    <p class="followers_text  text-light"> FOLLOWERS: 200.000  </p>
                </div>
            </div>

            <div class="result_div d-flex">
                <a href="#"><img class="result_img" title="Playlist Image" alt="Playlist Image" src="images/playlist.jpg"></a>
                <div class="playlist_text_div">
                    <a href="#" class="playlist_name_text text-light text-decoration-none"><h2>TITULO DE PLAYLIST</h2></a>
                    <p class="createdby_text text-light">CREADA POR: USUARIO</p>
                    <p class="datesongnumber_text  text-light">DD/mm/YYYY - X CANCIONES</p>
                    <p class="followers_text  text-light"> FOLLOWERS: 200.000  </p>
                </div>
            </div>

        </section>

@endsection
