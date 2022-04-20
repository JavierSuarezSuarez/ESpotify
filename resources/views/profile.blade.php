@extends('layouts/admin-layout')

@section('styles')
    <link href="{{ asset('css/profile_style.css') }}" rel="stylesheet">
@stop

@section('mainContent')

        <section class="profile_section">

            <div class="user_img_div">
                <div class="user_img_mobile_div">
                    <img src="{{$user -> foto}}" class="user_img"  alt="user_image" /> <br>
                </div>
                <div class="user_data_mobile_div">
                    <h3 class="user_full_name">{{$user -> nombre}} {{$user -> apellidos}}</h3>
                    <h4 class="playlist_text">Playlists: </h4>
                    <p class="user_playlists">6</p> <br>
                </div>
                <div class="button_div">
                    <form  class="user_edit_form" action="{{ route('users.edit', $user -> id)}}" method="PUT">
                        @csrf
                        <button class="btn btn-default full-width">Editar Perfil</button>
                    </form>
                </div>
            </div>

            <div class="user_data_div">
                <h6 class="header_name">NOMBRE</h6>
                <p class="user_name">{{$user -> nombre}}</p>
                <h6 class="header_surname">APELLIDOS</h6>
                <p class="user_surname">{{$user -> apellidos}}</p>
                <h6 class="header_email">EMAIL</h6>
                <p class="user_email">{{$user -> email}}</p>
                <h6 class="header_password">CONTRASEÑA</h6>
                <p class="user_password">{{$user -> password}}</p>
            </div>
        </section>
@endsection
