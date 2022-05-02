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


    <section class="main-playlist d-flex flex-column justify-content-center align-items-center mt-5">
        <div class="container d-flex flex-column justify-content-center">
            <div class="d-flex flex-column flex-lg-row mb-3 justify-content-between">

                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{$playlist->imagen}}" class="w-100 playlistImg">
                </div>

                <div class="d-flex flex-column mt-3 mt-md-5 mx-lg-4">
                    <h2 class="playlist">Playlist</h2>
                    <h3 class="playlist-title">{{$playlist->nombre}}</h3>
                    <div class="d-flex flex-column flex-md-row mt-sm-2 mt-md-3 align-items-md-center">
                        <p>{{$playlist->user->nombre}}</p>
                        <p class="mx-md-2">* 50 canciones</p>
                        <p>2h 58 min</p>
                        <p class="d-flex flex-row jusify-content-center align-items-center"><button type="button" data-toggle="modal" data-target="#addSongModal" class="ml-md-4 add-song"><i class='bx bxs-plus-circle mx-2'></i>Añadir cancion</button></p>
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
                            <button class="follow-button">Dejar de Seguir <i class='bx bx-plus'></i> </button>
                        </form>
                    @endif
                </div>

            </div>

            <div class="table-div table-responsive mt-3">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Título</th>
                        <th scope="col">Album</th>
                        <th scope="col">Fecha de incorporacion</th>
                        <th scope="col">Duración</th>
                        <th scope="col" colspan="2">Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($playlistSongs->songs as $playlistSong)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>
                                <div>
                                    <p><strong>{{$playlistSong->nombre}}</strong></p>
                                    <p>{{$playlistSong->artistas}}</p>
                                </div>
                            </td>
                            <td>{{$playlistSong->album}}</td>
                            <td>1 ene 2022</td>
                            <td>3:30</td>
                            <td>
                                <!--<button><i class='bx bx-play playlist-icon' ></i></button>-->
                                <form action="{{route('playlistsongs.destroy',  $parameteres=[$playlist->id, $playlistSongs -> id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button><i class='bx bxs-x-circle playlist-icon'></i></button>
                                </form>

                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

            <div class="cards-div d-flex flex-column">
                @foreach($playlistSongs->songs as $playlistSong)
                    <div class="playlist-card d-flex flex-row justify-content-between">
                        <div class="d-flex flex-row">
                            <div>
                                <p><strong>{{$playlistSong->nombre}}</strong></p>
                                <p>{{$playlistSong->artistas}}</p>
                            </div>
                            <p>{{$playlistSong->album}}</p>
                        </div>
                        <div class="card-delete d-flex align-items-center px-4">
                            <button><i class='bx bxs-x-circle playlist-icon'></i></button>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>


    <!-- Modal to Add songs to the playlist -->
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
                    @endforeach
                </div>
                <div class="modal-footer">
                    <!--<button type="button" class="save-btn btn btn-primary">Save changes</button>-->
                </div>
            </div>
        </div>
    </div>

@endsection
