<?php
$user = Illuminate\Support\Facades\Auth::user();
?>
@extends( ($user -> tipo == 1) ? 'layouts/admin-layout':'layouts/registered-user-layout')

@section('styles')
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{asset('css/song.css')}}" rel="stylesheet">
@stop

@section('mainContent')
    <section class="main-song h-100 d-flex flex-column justify-content-center align-items-center mt-5">
        <div>
            <div>
                <div class="d-flex flex-row justify-content-between mb-2">
                    <h2>{{$song->artistas}}</h2>
                    <i class='bx bxs-user album-icon'></i>
                </div>
                <div class="d-flex flex-row justify-content-between mb-2">
                    <h3>{{$song->album}}</h3>
                    <i class='bx bxs-album album-icon'></i>
                </div>
                <div class="d-flex flex-row justify-content-between">
                    <h4>{{$song->nombre}}</h4>
                    <i class='bx bxs-music album-icon'></i>
                </div>

                <img src="{{$song->imagen}}" class="album-cover my-3">

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
        </div>

    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.3/howler.min.js" integrity="sha512-6+YN/9o9BWrk6wSfGxQGpt3EUK6XeHi6yeHV+TYD2GR0Sj/cggRpXr1BrAQf0as6XslxomMUxXp2vIl+fv0QRA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('js/song.js')}}"></script>
@endsection
