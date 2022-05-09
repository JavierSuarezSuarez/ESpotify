<?php
$user = Illuminate\Support\Facades\Auth::user();
?>
@extends('layouts/admin-layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin-forms.css') }}">
@stop

@section('mainContent')
    <div class="d-flex justify-content-center form-container">
        <form action="{{ $song->id == null ? route('songs.store') : '/songs/'.$song->id }}" method="POST" enctype="multipart/form-data" class="admin-form border rounded p-5 bg-light mt-4 mb-4">
            @if ($song->id) {{ method_field('PUT') }} @endif
            @csrf

            @if ($song->id) <h1 class="text-center text-light">Modificar Canción</h1>
            @else <h1 class="text-center text-light">Añadir Canción</h1>@endif

            <label for="name" class="mt-2 text-light">Nombre</label>
            <div class="form-group">
                <input id="nombre" name="nombre" type="text" class="form-control" placeholder="" value="{{old('nombre', $song->nombre)}}">
            </div>
            <label for="artistas" class="text-light">Artistas</label>
            <div class="form-group">
                <input type="text" id="artistas" name="artistas" class="form-control" placeholder="" value="{{old('artistas', $song->artistas)}}">
            </div>
            <label for="album" class="text-light">Album</label>
            <div class="form-group">
                <input type="text" id="album" name="album" class="form-control" placeholder="" value="{{old('album', $song->album)}}">
            </div>
            <label for="genero" class="text-light">Género</label>
            <div class="form-group">
                <input type="text" id="genero" name="genero" class="form-control" placeholder="" value="{{old('genero', $song->genero)}}">
            </div>
            <label for="url" class="text-light">Url</label>
            <div class="form-group">
                <input type="text" id="url" name="url" class="form-control" placeholder="" value="{{old('url', $song->url)}}">
            </div>
            <label for="foto" class="text-light">Foto</label>
            <div class="custom-file container">
                <input type="file" id="imagen" name="imagen" class="custom-file-input" id="customFile" value="{{old('imagen', $song->imagen)}}">
                <label class="custom-file-label" for="customFile">Seleccionar foto</label>
            </div>

            @if ($song->id == null) <input name="user_id" type="hidden" value="{{$user -> id}}"> @endif

            <button type="submit" class="btn save-btn mt-4">Confirmar</button>
        </form>
    </div>
@endsection
