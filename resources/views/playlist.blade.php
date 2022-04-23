<?php
$user = Illuminate\Support\Facades\Auth::user();
?>
@extends( ($user -> tipo == 1) ? 'layouts/admin-layout':'layouts/registered-user-layout')

@section('styles')
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{asset('css/playlist.css')}}" rel="stylesheet">
@stop

@section('mainContent')
    <main class="main-playlist d-flex flex-column justify-content-center align-items-center">
        <section class="container d-flex flex-column justify-content-center">
            <div class="d-flex flex-column flex-lg-row mb-3 justify-content-between">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{asset('images/playlist_cover.png')}}" class="w-100">
                </div>
                <div class="d-flex flex-column mt-3 mt-md-5 mx-lg-4">
                    <h2 class="playlist">Playlist</h2>
                    <h3 class="playlist-title">Sound of Street</h3>
                    <div class="d-flex flex-column flex-md-row mt-sm-2 mt-md-3 align-items-md-center">
                        <p>@pepemoreno</p>
                        <p class="mx-md-2">* 50 canciones</p>
                        <p>2h 58 min</p>
                        <p class="d-flex flex-row jusify-content-center align-items-center"><button class="ms-md-4 add-song"><i class='bx bxs-plus-circle mx-2'></i>Añadir cancion</button></p>
                    </div>
                </div>

                <div class="d-flex align-items-start mt-3 mt-md-5">
                    <div>
                        <button class="follow-button">Seguir <i class='bx bx-plus'></i> </button>
                    </div>
                </div>

            </div>

            <div class="table-div table-responsive">
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
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <div>
                                <p><strong>Thunder</strong></p>
                                <p>Imagine Dragons</p>
                            </div>
                        </td>
                        <td>Evolve</td>
                        <td>1 ene 2022</td>
                        <td>3:30</td>
                        <td>
                            <button><i class='bx bx-play playlist-icon' ></i></button>
                            <button><i class='bx bxs-x-circle playlist-icon'></i></button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>
                            <div>
                                <p><strong>Thunder</strong></p>
                                <p>Imagine Dragons</p>
                            </div>
                        </td>
                        <td>Evolve</td>
                        <td>1 ene 2022</td>
                        <td>3:30</td>
                        <td>
                            <button><i class='bx bx-play playlist-icon' ></i></button>
                            <button><i class='bx bxs-x-circle playlist-icon'></i></button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>
                            <div>
                                <p><strong>Thunder</strong></p>
                                <p>Imagine Dragons</p>
                            </div>
                        </td>
                        <td>Evolve</td>
                        <td>1 ene 2022</td>
                        <td>3:30</td>
                        <td>
                            <button><i class='bx bx-play playlist-icon'></i></button>
                            <button><i class='bx bxs-x-circle playlist-icon'></i></button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="cards-div d-none d-flex flex-column">
                <div class="playlist-card d-flex flex-row justify-content-between">
                    <div class="d-flex flex-row">
                        <div>
                            <p><strong>Thunder</strong></p>
                            <p>Imagine Dragons</p>
                        </div>
                        <p>Evolve</p>
                    </div>
                    <div class="card-delete d-flex align-items-center px-4">
                        <button><i class='bx bxs-x-circle playlist-icon'></i></button>
                    </div>
                </div>


                <div class="playlist-card d-flex flex-row justify-content-between">
                    <div class="d-flex flex-row">
                        <div>
                            <p><strong>Thunder</strong></p>
                            <p>Imagine Dragons</p>
                        </div>
                        <p>Evolve</p>
                    </div>
                    <div class="card-delete d-flex align-items-center px-4">
                        <button><i class='bx bxs-x-circle playlist-icon'></i></button>
                    </div>
                </div>


                <div class="playlist-card d-flex flex-row justify-content-between">
                    <div class="d-flex flex-row">
                        <div>
                            <p><strong>Thunder</strong></p>
                            <p>Imagine Dragons</p>
                        </div>
                        <p>Evolve</p>
                    </div>
                    <div class="card-delete d-flex align-items-center px-4">
                        <button><i class='bx bxs-x-circle playlist-icon'></i></button>
                    </div>
                </div>
            </div>

        </section>
    </main>

@endsection


<!--<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link href="{{asset('css/playlist.css')}}" rel="stylesheet">
        <title>Playlist</title>
    </head>

    <body>

    <header>

    </header>

    <main class="main-playlist d-flex flex-column justify-content-center align-items-center">
        <section class="container d-flex flex-column justify-content-center">
            <div class="d-flex flex-column flex-lg-row mb-3 justify-content-between">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{asset('images/playlist_cover.png')}}" class="w-100">
                </div>
                <div class="d-flex flex-column mt-3 mt-md-5 mx-lg-4">
                    <h2 class="playlist">Playlist</h2>
                    <h3 class="playlist-title">Sound of Street</h3>
                    <div class="d-flex flex-column flex-md-row mt-sm-2 mt-md-3 align-items-md-center">
                        <p>@pepemoreno</p>
                        <p class="mx-md-2">* 50 canciones</p>
                        <p>2h 58 min</p>
                        <p class="d-flex flex-row jusify-content-center align-items-center"><button class="ms-md-4 add-song"><i class='bx bxs-plus-circle mx-2'></i>Añadir cancion</button></p>
                    </div>
                </div>

                <div class="d-flex align-items-start mt-3 mt-md-5">
                    <div>
                        <button class="follow-button">Seguir <i class='bx bx-plus'></i> </button>
                    </div>
                </div>

            </div>

            <div class="table-div table-responsive">
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
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <div>
                                    <p><strong>Thunder</strong></p>
                                    <p>Imagine Dragons</p>
                                </div>
                            </td>
                            <td>Evolve</td>
                            <td>1 ene 2022</td>
                            <td>3:30</td>
                            <td>
                                <button><i class='bx bx-play playlist-icon' ></i></button>
                                <button><i class='bx bxs-x-circle playlist-icon'></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>
                                <div>
                                    <p><strong>Thunder</strong></p>
                                    <p>Imagine Dragons</p>
                                </div>
                            </td>
                            <td>Evolve</td>
                            <td>1 ene 2022</td>
                            <td>3:30</td>
                            <td>
                                <button><i class='bx bx-play playlist-icon' ></i></button>
                                <button><i class='bx bxs-x-circle playlist-icon'></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>
                                <div>
                                    <p><strong>Thunder</strong></p>
                                    <p>Imagine Dragons</p>
                                </div>
                            </td>
                            <td>Evolve</td>
                            <td>1 ene 2022</td>
                            <td>3:30</td>
                            <td>
                                <button><i class='bx bx-play playlist-icon'></i></button>
                                <button><i class='bx bxs-x-circle playlist-icon'></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="cards-div d-none d-flex flex-column">
                <div class="playlist-card d-flex flex-row justify-content-between">
                    <div class="d-flex flex-row">
                        <div>
                            <p><strong>Thunder</strong></p>
                            <p>Imagine Dragons</p>
                        </div>
                        <p>Evolve</p>
                    </div>
                    <div class="card-delete d-flex align-items-center px-4">
                        <button><i class='bx bxs-x-circle playlist-icon'></i></button>
                    </div>
                </div>
                <div class="playlist-card d-flex flex-row justify-content-between">
                    <div class="d-flex flex-row">
                        <div>
                            <p><strong>Thunder</strong></p>
                            <p>Imagine Dragons</p>
                        </div>
                        <p>Evolve</p>
                    </div>
                    <div class="card-delete d-flex align-items-center px-4">
                        <button><i class='bx bxs-x-circle playlist-icon'></i></button>
                    </div>
                </div>
                <div class="playlist-card d-flex flex-row justify-content-between">
                    <div class="d-flex flex-row">
                        <div>
                            <p><strong>Thunder</strong></p>
                            <p>Imagine Dragons</p>
                        </div>
                        <p>Evolve</p>
                    </div>
                    <div class="card-delete d-flex align-items-center px-4">
                        <button><i class='bx bxs-x-circle playlist-icon'></i></button>
                    </div>
                </div>
            </div>

        </section>
    </main>


    <footer>

    </footer>

    </body>



</html>-->
