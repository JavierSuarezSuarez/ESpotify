<?php
$user = Illuminate\Support\Facades\Auth::user();

?>
@extends('layouts/registered-user-layout')

@section('styles')
    <link href="{{ asset('css/admin_playlists_panel_style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/playlists_panel_style.css') }}" rel="stylesheet">
@stop

@section('mainContent')
    <!-- My Playlists - Browser - Add Playlist Subheader Section -->
    <section class="subheaders_section d-flex justify-content-between align-items-center">
        <div class="title">
            <h2 class="text-light">Mis Playlists</h2>
        </div>

        <form class="form-inline d-flex justify-content-between align-items-center" method="get" action="/browse">
            <input class="form-control mr-sm-2" type="search" id="Search" name="Search" placeholder="Search" aria-label="Search">
            <input name="flag" type="hidden" value="userplaylists">
            <button class="btn my-2 my-sm-0 text-light" type="submit"><em class="uil uil-search"></em></button>
        </form>

        <div class="mx-4">
            <a class="h5 d-flex align-items-center justify-content-center my-0 mx-2 text-light text-decoration-none" href="{{ route('playlists.create')}}"><em class="uil uil-plus-circle text-light icono mx-2"></em>A&ntilde;adir Playlist</a>
        </div>
    </section>

    <!-- Playlists Section -->
    @if (isset($buscar))
        <section class="playlists_section d-flex w-100">
            @foreach($buscar as $playlist)
                <div class="playlist_div d-flex flex-column justify-content-center align-items-center">
                    <a href="{{route('playlists.show', $playlist -> id)}}"><img class="playlist_img" title="Playlist Image" alt="Playlist Image" src="{{$playlist -> imagen}}"></a>
                    <div class="playlist_text_div d-flex flex-column align-items-center">
                        <p class="playlist_name_text text-light">{{$playlist -> nombre}}</p>
                        <p class="createdby_text text-light">CREADA POR: {{$playlist->user->nombre}} {{$playlist->user->apellidos}}</p>
                        <p class="datesongnumber_text text-light">{{$playlist->created_at}} - {{$playlist->songs->count()}} CANCION/ES</p>
                        <p class="followers_text text-light"> FOLLOWERS: {{$playlist->users->count()}} </p>
                    </div>

                    <div class="edit_delete_btns d-flex">
                        <form class="" action="{{ route('playlists.edit', $playlist -> id)}}" method="PUT">
                            @csrf
                            <button class="edit_btn btn" type="submit">
                                <em class="uil uil-pen text-primary action-icon"></em>
                            </button>
                        </form>

                        <form class="" action="{{ route('playlists.destroy', $playlist -> id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="delete_btn btn" type="submit">
                                <em class="uil uil-trash-alt text-danger action-icon"></em>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </section>
    @else

        <section class="playlists_section d-flex w-100">
            @foreach($userWithPlaylists->playlists as $playlist)
                <div class="playlist_div d-flex flex-column justify-content-center align-items-center">
                    <a href="{{route('playlists.show', $playlist -> id)}}"><img class="playlist_img" title="Playlist Image" alt="Playlist Image" src="{{$playlist -> imagen}}"></a>
                    <div class="playlist_text_div d-flex flex-column align-items-center">
                        <p class="playlist_name_text text-light">{{$playlist -> nombre}}</p>
                        <p class="createdby_text text-light">CREADA POR: {{$playlist->user->nombre}} {{$playlist->user->apellidos}}</p>
                        <p class="datesongnumber_text text-light">{{$playlist->created_at}} - {{$playlist->songs->count()}} CANCION/ES</p>
                        <p class="followers_text text-light"> FOLLOWERS: {{$playlist->users->count()}} </p>
                    </div>

                    <div class="edit_delete_btns d-flex">
                        <form class="" action="{{ route('playlists.edit', $playlist -> id)}}" method="PUT">
                            @csrf
                            <button class="edit_btn btn" type="submit">
                                <em class="uil uil-pen text-primary action-icon"></em>
                            </button>
                        </form>

                        <form class="" action="{{ route('playlists.destroy', $playlist -> id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="delete_btn btn" type="submit">
                                <em class="uil uil-trash-alt text-danger action-icon"></em>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </section>
    @endif
@endsection
