<?php
$user = Illuminate\Support\Facades\Auth::user();
$songs = Illuminate\Support\Facades\DB::table('songs') ->get();

$i = 0;
?>
@extends( ($user -> tipo == 1) ? 'layouts/admin-layout':'layouts/registered-user-layout')

@section('styles')
    <link href="{{asset('css/home.css')}}" rel="stylesheet">
@stop

@section('mainContent')
    <section class="main-home h-100 d-flex justify-content-end align-items-center">
        <div class="section-home d-flex flex-column">

            <div class="top-panel mb-5 mt-5">
                <div class="px-3 py-2 d-flex flex-row justify-content-center">
                    <div>
                        <h3 class="fw-bold mb-4">Top artistas</h3>

                        @foreach($songs as $song)
                            @if($i < 4)
                                <div class="d-flex flex-row justify-content-between mb-2">
                                    <h4>{{$song->artistas}}</h4>
                                    <img class="imgToResize" src="{{$song->imagen}}" alt="{{$song->nombre}}">
                                </div>
                                <?php $i++ ?>
                            @endif
                        @endforeach

                    </div>

                    <div class="d-flex justify-content-center align-items-center">
                        <img class="logo mx-4" src="{{asset('images/logo_home.png')}}" alt="logo">
                    </div>


                    <div>
                        <h3 class="fw-bold mb-4">Top canciones</h3>
                        <?php $i = 0 ?>
                        @foreach($songs as $song)
                            @if($i < 4)
                                <div class="d-flex flex-row justify-content-between mb-2">
                                    <a href="{{route('songs.show', $song -> id)}}"><h4>{{$song->nombre}}</h4></a>
                                    <a href="{{route('songs.show', $song -> id)}}"><img class="imgToResize" src="{{$song->imagen}}" alt="{{$song->nombre}}"></a>
                                </div>
                                <?php $i++ ?>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>



            <div class="fav-panel mb-5">
                <div class="px-3 py-2 d-flex flex-row justify-content-between">
                    <div>
                        <h3 class="fw-bold mb-4">Fav artistas</h3>

                        <?php $i = 0 ?>
                        @foreach($songs as $song)
                            @if($i < 4)
                                <div class="d-flex flex-row justify-content-between mb-2 mb-2">
                                    <h4>{{$song->artistas}}</h4>
                                    <img class="imgToResize" src="{{$song->imagen}}" alt="{{$song->nombre}}">
                                </div>
                                <?php $i++ ?>
                            @endif
                        @endforeach

                    </div>

                    <div class="d-flex justify-content-center align-items-center">
                        <img class="logo mx-4" src="{{asset('images/logo_home.png')}}" alt="logo">
                    </div>


                    <div>
                        <h3 class="fw-bold mb-4">Fav canciones</h3>

                        <?php $i = 0 ?>
                        @foreach($songs as $song)
                            @if($i < 4)
                                <div class="d-flex flex-row justify-content-between mb-2">
                                    <a href="{{route('songs.show', $song -> id)}}"><h4>{{$song->nombre}}</h4></a>
                                    <a href="{{route('songs.show', $song -> id)}}"><img class="imgToResize" src="{{$song->imagen}}" alt="{{$song->nombre}}"></a>
                                </div>
                                <?php $i++ ?>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
