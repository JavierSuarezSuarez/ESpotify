<?php
$user = Illuminate\Support\Facades\Auth::user();
?>

@extends( ($user -> tipo == 1) ? 'layouts/admin-layout':'layouts/registered-user-layout')

@section('styles')
    <link href="{{ asset('css/search_dashboard_style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/songs_panel_style.css') }}" rel="stylesheet">
@stop

@section('mainContent')

        <!-- Browser -->
        <section class="subheaders_section d-flex justify-content-between align-items-center">

            <form class="form-inline d-flex justify-content-between align-items-center search-bar" method="get" action="/browse">
                <input class="form-control mr-sm-2" type="search" id="Search" name="Search" placeholder="Search" aria-label="Search">
                <input name="flag" type="hidden" value="search">
                <button class="btn my-2 my-sm-0 text-light" type="submit"><i class="uil uil-search"></i></button>
            </form>

        </section>

        <!-- Browser Results Section -->
        <section class="results_section d-flex flex-column">

            @if (isset($buscar))

                @foreach($playlists as $playlist)
                        <div class="result_div d-flex">
                            <a href="{{route('playlists.show', $playlist -> id)}}"><img class="result_img" title="Playlist Image" alt="Playlist Image" src="{{$playlist -> imagen}}"></a>
                            <div class="playlist_text_div">
                                <a href="{{route('playlists.show', $playlist -> id)}}" class="playlist_name_text text-light">{{$playlist -> nombre}}</a>
                                <p class="createdby_text text-light">CREADA POR: {{$playlist->user->nombre}} {{$playlist->user->apellidos}}</p>
                                <p class="datesongnumber_text text-light">{{$playlist->created_at}} - {{$playlist->songs->count()}} CANCION/ES</p>
                                <p class="followers_text text-light"> FOLLOWERS: {{$playlist->users->count()}} </p>
                            </div>
                        </div>
                @endforeach

                @foreach($songs as $song)
                        <div class="result_div d-flex">
                            <a href="{{route('songs.show', $song -> id)}}"><img class="song_img" title="Song Image" alt="Song Image" src="{{$song -> imagen}}"></a>
                            <div class="song_text_div">
                                <a href="{{route('songs.show', $song -> id)}}" class="song_name_text text-light text-decoration-none"><h2>{{$song -> nombre}}</h2></a>
                                <p class="song_album_text text-light">{{$song -> album}}</p>
                                <p class="song_artist_text text-light">{{$song -> artistas}}</p>
                            </div>
                        </div>
                @endforeach

            @endif
        </section>
@endsection
