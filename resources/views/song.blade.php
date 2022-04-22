<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{asset('css/song.css')}}" rel="stylesheet">
    <title>Song</title>
</head>

<header>

</header>

<body>
<main class="main-song h-100 d-flex flex-column justify-content-center align-items-center">
    <section>
        <div>
            <div class="d-flex flex-row justify-content-between mb-2">
                <h2>Imagine Dragons</h2>
                <i class='bx bxs-user album-icon'></i>
            </div>
            <div class="d-flex flex-row justify-content-between mb-2">
                <h3>Evolve</h3>
                <i class='bx bxs-album album-icon'></i>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <h4>Thunder</h4>
                <i class='bx bxs-music album-icon'></i>
            </div>

            <img src="{{asset('images/evolve.jpeg')}}" class="album-cover my-3">

            <div id="timer" class="white-text">0:00</div>
            <div id="duration" class="white-text">0:00</div>

            <div class="d-flex flex-row justify-content-center align-items-center">
                <div id="loading"></div>
                <button id="prevBtn" class="button-song" type="button"><i class='bx bx-skip-previous song-icon'></i></button>
                <button id="playBtn" class="button-song mx-2" type="button"><i class='bx bx-play song-icon'></i></button>
                <button id="pauseBtn" class="button-song mx-2" type="button"><i class='bx bx-pause song-icon'></i></button>
                <button id="nextBtn" class="button-song" type="button"><i class='bx bx-skip-next song-icon'></i></button>
            </div>

            <div id="volume" class="fadeout">
                <div id="barFull" class="bar"></div>
                <div id="barEmpty" class="bar"></div>
                <div id="sliderBtn"></div>
            </div>

        </div>
    </section>

</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.3/howler.min.js" integrity="sha512-6+YN/9o9BWrk6wSfGxQGpt3EUK6XeHi6yeHV+TYD2GR0Sj/cggRpXr1BrAQf0as6XslxomMUxXp2vIl+fv0QRA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('js/song.js')}}"></script>

</body>

<footer>

</footer>

<html/>
