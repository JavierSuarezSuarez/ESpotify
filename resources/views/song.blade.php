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
                    <h1 class="url" id="urlSong" >{{$song->url}}</h1>
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

                <div class="my-4">
                    <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="{{$song->url}}"></iframe>
                </div>

            </div>
        </div>

    </section>
@endsection
