<?php
    $user = Illuminate\Support\Facades\Auth::user();
?>
@extends('layouts/admin-layout')

@section('styles')
    <link href="{{ asset('css/songs_panel_style.css') }}" rel="stylesheet">
@stop

@section('mainContent')

    <!-- Songs - Browser - Add Song Subheader Section -->
    <section class="subheaders_section d-flex justify-content-between align-items-center">

        <div class="title">
            <h2 class="text-light">Canciones</h2>
        </div>


        <form method="get" action="/browse" class="form-inline d-flex justify-content-between align-items-center">
            <input class="form-control mr-sm-2" type="search" id="Search" name="Search" placeholder="Search" aria-label="Search">
            <input name="flag" type="hidden" value="songs">
            <button class="btn my-2 my-sm-0 text-light" type="submit"><i class="uil uil-search"></i></button>
        </form>

        <div class="mx-4">
            <a class="h5 d-flex align-items-center justify-content-center my-0 mx-2 text-light text-decoration-none" href="{{ route('songs.create')}}"><i class="uil uil-plus-circle text-light icono mx-2"></i>A&ntilde;adir Canción</a>
        </div>

    </section>

    <!-- Songs Section -->
    @if (isset($buscar))
    <section class="songs_section d-flex flex-column">
        @foreach($buscar as $song)
            <div class="song_div d-flex align-items-center justify-content-between">
                <div class="d-flex justify-content-center">
                    <a href="{{route('songs.show', $song -> id)}}"><img class="song_img" title="Song Image" alt="Song Image" src="{{$song -> imagen}}"></a>
                    <div class="song_text_div">
                        <a href="{{route('songs.show', $song -> id)}}" class="song_name_text text-light text-decoration-none"><h2>{{$song -> nombre}}</h2></a>
                        <p class="song_album_text text-light">{{$song -> album}}</p>
                        <p class="song_artist_text text-light">{{$song -> artistas}}</p>
                    </div>
                </div>


                <div class="edit_delete_btns d-flex">
                    <form class="song_edit_form" action="{{ route('songs.edit', $song -> id)}}" method="PUT">
                        @csrf
                        <button class="edit_btn btn" type="submit">
                            <i class="uil uil-pen text-primary action-icon"></i>
                        </button>
                    </form>

                    <form class="song_delete_form" action="{{ route('songs.destroy', $song -> id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="delete_btn btn" type="submit">
                            <i class="uil uil-trash-alt text-danger action-icon"></i>
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </section>

    @else
    <section class="songs_section d-flex flex-column">
        @foreach($songs as $song)
        <div class="song_div d-flex align-items-center justify-content-between">
            <div class="d-flex justify-content-center">
                <a href="{{route('songs.show', $song -> id)}}"><img class="song_img" title="Song Image" alt="Song Image" src="{{$song -> imagen}}"></a>
                    <div class="song_text_div">
                        <a href="{{route('songs.show', $song -> id)}}" class="song_name_text text-light text-decoration-none"><h2>{{$song -> nombre}}</h2></a>
                        <p class="song_album_text text-light">{{$song -> album}}</p>
                        <p class="song_artist_text text-light">{{$song -> artistas}}</p>
                    </div>
                </div>

                <div class="edit_delete_btns d-flex">
                    <form class="song_edit_form" action="{{ route('songs.edit', $song -> id)}}" method="PUT">
                        @csrf
                        <button class="edit_btn btn" type="submit">
                            <i class="uil uil-pen text-primary action-icon"></i>
                        </button>
                    </form>

                    <form class="song_delete_form" action="{{ route('songs.destroy', $song -> id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="delete_btn btn" type="submit">
                            <i class="uil uil-trash-alt text-danger action-icon"></i>
                        </button>
                    </form>
                </div>
        </div>
        @endforeach
    </section>
    @endif

@endsection

<!--
<script>
window.addEventListener('load'), function(){
    document.getElementById("Search").addEventListener("keyup", () => {
        if((document.getElementById("Search").value.length)>=1)
            fetch(`/songs?Search=${document.getElementById("Search").value}`,{method:'get'})
            .then(response => response.text())
            .then(html => { document.getElementById("resultados").innerHTML = html})
        else
            document.getElementById("resultados").innerText = ""
        })
}
</script>
-->
