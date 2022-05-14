<?php
$user = Illuminate\Support\Facades\Auth::user();
$i = 1;
?>
@extends( ($user -> tipo == 1) ? 'layouts/admin-layout':'layouts/registered-user-layout')

@section('styles')
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{asset('css/playlist.css')}}" rel="stylesheet">
@stop

@section('mainContent')


    <section class="main-playlist d-flex flex-column align-items-center mt-5">
        <div class="container d-flex flex-column justify-content-center">

            <!--------------------------------------Playlist Info ----------------------------------------------------->
            <div class="d-flex flex-column flex-lg-row mb-3 justify-content-between">

                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{$playlist->imagen}}" class="playlistImg">
                </div>

                <div class="d-flex flex-column mt-3 mt-md-5 mx-lg-4">
                    <h2 class="playlist">Playlist</h2>
                    <h3 class="playlist-title">{{$playlist->nombre}}</h3>
                    <div class="d-flex flex-column flex-md-row mt-sm-2 mt-md-3 align-items-md-center">
                        <p>{{$playlist->user->nombre}}</p>
                        <p class="mx-md-2">* {{$playlistSongs->songs->count()}} cancion/es</p>
                        @if($playlist->user->id == $user->id || $user->tipo == 1)
                            <p class="d-flex flex-row jusify-content-center align-items-center"><button type="button" data-toggle="modal" data-target="#addSongModal" class="ml-md-4 add-song"><i class='bx bxs-plus-circle mx-2'></i>Añadir cancion</button></p>
                        @endif
                    </div>
                </div>

                <div class="d-flex align-items-start mt-3 mt-md-5">
                    @if($followerRelation->isEmpty())
                        <form action="{{route('followers.store')}}" method="POST">
                            @csrf
                            <input name="playlist_id" type="hidden" value="{{$playlist -> id}}">
                            <input name="user_id" type="hidden" value="{{$user -> id}}">
                            <button class="follow-button">Seguir <i class='bx bx-plus'></i> </button>
                        </form>
                    @else
                        <form action="{{route('followers.destroy',  $playlist -> id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="unfollow-button">Dejar de Seguir <i class='bx bx-plus'></i></button>
                        </form>
                    @endif
                </div>

            </div>


            <!--------------------------------------Playlist Table of Songs Added ------------------------------------->
            <div class="table-div table-responsive mt-3">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Título</th>
                        <th scope="col">Album</th>
                        <th scope="col">Fecha de incorporacion</th>
                        @if($playlist->user->id == $user->id || $user->tipo == 1)
                            <th scope="col" colspan="2">Actions</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($playlistSongs->songs as $playlistSong)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>
                                <div>
                                    <a href="{{route('songs.show', $playlistSong-> id)}}" class="text-light"><strong>{{$playlistSong->nombre}}</strong></a>
                                    <p>{{$playlistSong->artistas}}</p>
                                </div>
                            </td>
                            <td>{{$playlistSong->album}}</td>
                            <td>{{$playlistSong->pivot->created_at}}</td>

                            @if($playlist->user->id == $user->id || $user->tipo == 1)
                                <td>

                                    <form action="{{route('playlistsongs.destroy',$playlist -> id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input name="playlist_id" type="hidden" value="{{$playlist -> id}}">
                                        <input name="song_id" type="hidden" value="{{$playlistSong -> id}}">
                                        <button><i class='bx bxs-x-circle playlist-icon'></i></button>
                                    </form>
                                </td>
                            @endif
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>


            <!--------------------------------------Playlist Cards of Songs Added (Mobile) ---------------------------->
            <div class="cards-div d-flex flex-column">
                @foreach($playlistSongs->songs as $playlistSong)
                    <div class="playlist-card d-flex flex-row justify-content-between">
                        <div class="d-flex flex-row">
                            <div>
                                <a href="{{route('songs.show', $playlistSong-> id)}}" class="text-light"><strong>{{$playlistSong->nombre}}</strong></a>
                                <p>{{$playlistSong->artistas}}</p>
                            </div>
                            <p>{{$playlistSong->album}}</p>
                        </div>
                        <div class="card-delete d-flex align-items-center px-4">
                            <form action="{{route('playlistsongs.destroy',$playlist -> id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input name="playlist_id" type="hidden" value="{{$playlist -> id}}">
                                <input name="song_id" type="hidden" value="{{$playlistSong -> id}}">
                                <button><i class='bx bxs-x-circle playlist-icon'></i></button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>


    <!------------------------------------------------- Modal to Add songs to the playlist ---------------------------->
    <div class="modal fade" id="addSongModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content addSongModal">

                <div class="modal-header">
                    <h5 class="modal-title text-light" id="exampleModalLongTitle">Añadir canciones</h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    @foreach($songsModal as $song)
                        @if($playlistSongs->songs->contains($song->id) == false)
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="text-light">
                                    {{$song -> nombre}}
                                </div>

                                <form action="{{route('playlistsongs.store')}}" method="POST">
                                    @csrf
                                    <input name="playlist_id" type="hidden" value="{{$playlist -> id}}">
                                    <input name="song_id" type="hidden" value="{{$song -> id}}">
                                    <button class="edit_btn btn text-light">
                                        <i class="h3 uil uil-plus-circle"></i>
                                    </button>
                                </form>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="modal-footer"></div> <!--For aesthetic purpose -->
            </div>
        </div>
    </div>

@endsection
