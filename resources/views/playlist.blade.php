<html>
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

    <main class="main-playlist h-100 d-flex flex-column justify-content-center align-items-center">
        <section class="container d-flex flex-column justify-content-center align-items-center">
            <div class="d-flex flex-row mb-5">
                <div class="me-4">
                    <img src="{{asset('images/playlist_cover.png')}}">
                </div>
                <div class="d-flex flex-column mt-5">
                    <h2>Playlist</h2>
                    <h3>Sound of Street</h3>
                    <div class="d-flex flex-row mt-5">
                        <p>@pepemoreno</p>
                        <p class="mx-2">* 50 canciones</p>
                        <p>2h 58 min</p>
                        <button class="ms-4">Añadir cancion</button>
                    </div>
                </div>

                <div>
                    <button>Seguir</button>
                </div>

            </div>

            <div class="">
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
                                <button>Play</button>
                                <button>Delete</button>
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
                                <button>Play</button>
                                <button>Delete</button>
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
                                <button>Play</button>
                                <button>Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </section>
    </main>


    <footer>

    </footer>

    </body>



</html>
