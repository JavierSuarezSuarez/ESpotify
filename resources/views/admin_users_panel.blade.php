<?php
$user = Illuminate\Support\Facades\Auth::user();
?>
@extends('layouts/admin-layout')

@section('styles')
    <link href="{{ asset('css/admin_users_panel_style.css') }}" rel="stylesheet">
@stop

@section('mainContent')
    <section class="subheaders_section d-flex justify-content-between align-items-center">

        <div class="title">
            <h2 class="text-light">Usuarios</h2>
        </div>


        <form method="get" action="/browse" class="form-inline d-flex justify-content-between align-items-center">
            <input class="form-control mr-sm-2" type="search" name="Search" placeholder="Search" aria-label="Search">
            <input name="flag" type="hidden" value="users">
            <button class="btn my-2 my-sm-0 text-light" type="submit"><i class="uil uil-search"></i></button>
        </form>

        <div class="mx-4">
            <a class="h5 d-flex align-items-center justify-content-center my-0 mx-2 text-light text-decoration-none" href="{{ route('users.create')}}"><i class="uil uil-plus-circle text-light icono mx-2"></i>A&ntilde;adir Usuario</a>
        </div>

    </section>

    <!-- Users Section -->
    @if (isset($buscar))
    <section class="users_section d-flex">
        <div class="row d-flex justify-content-center align-items-center">
            @foreach($buscar as $user)
                <div class="user_div d-flex flex-column justify-content-center align-items-center mx-3">
                    <img class="user_img mt-5" title="User Image" alt="User Image" src="{{$user -> foto}}">
                    <p class="user_name_text text-light">{{$user -> nombre}} {{$user -> apellidos}}</p>

                    <div class="edit_delete_btns d-flex">
                        <form  class="user_edit_form" action="{{ route('users.edit', $user -> id)}}" method="PUT">
                            @csrf
                            <button class="edit_btn btn" type="submit">
                                <i class="uil uil-pen text-primary action-icon"></i>
                            </button>
                        </form>

                        <form class="user_delete_form" action="{{ route('users.destroy', $user -> id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="delete_btn btn" type="submit">
                                <i class="uil uil-trash-alt text-danger action-icon"></i>
                            </button>
                        </form>

                    </div>
                </div>
            @endforeach
        </div>
    </section>

    @else
        <section class="users_section d-flex">
            <div class="row d-flex justify-content-center align-items-center">
                @foreach($users as $user)
                    <div class="user_div d-flex flex-column justify-content-center align-items-center mx-3">
                        <img class="user_img mt-5" title="User Image" alt="User Image" src="{{$user -> foto}}">
                        <p class="user_name_text text-light">{{$user -> nombre}} {{$user -> apellidos}}</p>

                        <div class="edit_delete_btns d-flex">
                            <form  class="user_edit_form" action="{{ route('users.edit', $user -> id)}}" method="PUT">
                                @csrf
                                <button class="edit_btn btn" type="submit">
                                    <i class="uil uil-pen text-primary action-icon"></i>
                                </button>
                            </form>

                            <form class="user_delete_form" action="{{ route('users.destroy', $user -> id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="delete_btn btn" type="submit">
                                    <i class="uil uil-trash-alt text-danger action-icon"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endif

@endsection
