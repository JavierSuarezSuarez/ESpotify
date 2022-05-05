<?php
$user = Illuminate\Support\Facades\Auth::user();
?>
@extends('layouts/registered-user-layout')

@section('styles')
    <link href="{{ asset('css/songs_panel_style.css') }}" rel="stylesheet">
@stop

@section('mainContent')

        <!--------- Songs - Browser ----------------->
        <section class="subheaders_section d-flex justify-content-between align-items-center">

            <div class="title">
                <h2 class="text-light">Canciones</h2>
            </div>

            <form class="form-inline d-flex justify-content-between align-items-center mx-4">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn my-2 my-sm-0 text-light" type="submit"><i class="uil uil-search"></i></button>
            </form>

        </section>

        <!-- Songs Section -->
        <section class="songs_section d-flex flex-column">
            @foreach($songs as $song)
                <div class="song_div d-flex align-items-center">
                    <a href="#"> <img class="song_img" title="User Image" alt="User Image" src="{{$song->imagen}}"></a>
                    <div class="song_text_div">
                        <a href="#" class="song_name_text text-light">{{$song->nombre}}</a>
                        <p class="song_album_text text-light">{{$song->album}}</p>
                        <p class="song_artist_text text-light">{{$song->artistas}}</p>
                    </div>
                </div>
            @endforeach
        </section>
@endsection
