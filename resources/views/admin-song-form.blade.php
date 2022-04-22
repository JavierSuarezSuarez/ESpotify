<?php
$user = Illuminate\Support\Facades\Auth::user();
?>
@extends('layouts/admin-layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin-forms.css') }}">
@stop

@section('mainContent')
    <div class="d-flex justify-content-center form-container">
        <form action="{{ $song->id == null ? route('songs.store') : '/songs/'.$song->id }}" method="POST" class="admin-form border rounded p-5 bg-light mt-4 mb-4">
            @if ($song->id) {{ method_field('PUT') }} @endif
            @csrf

            @if ($song->id) <h1 class="text-center">Modify Song</h1>
            @else <h1 class="text-center">Create Song</h1>@endif

            <label for="name" class="mt-2">Nombre</label>
            <div class="form-group">
                <input id="nombre" name="nombre" type="text" class="form-control" placeholder="" value="{{old('nombre', $song->nombre)}}">
            </div>
            <label for="artistas">Artistas</label>
            <div class="form-group">
                <input type="text" id="artistas" name="artistas" class="form-control" placeholder="" value="{{old('artistas', $song->artistas)}}">
            </div>
            <label for="album">Album</label>
            <div class="form-group">
                <input type="text" id="album" name="album" class="form-control" placeholder="" value="{{old('album', $song->album)}}">
            </div>
            <label for="url">Url</label>
            <div class="form-group">
                <input type="text" id="url" name="url" class="form-control" placeholder="" value="{{old('url', $song->url)}}">
            </div>
            <label for="foto">Foto</label>
            <div class="custom-file container">
                <input type="file" id="imagen" name="imagen" class="custom-file-input" id="customFile" value="{{old('imagen', $song->imagen)}}">
                <label class="custom-file-label" for="customFile">Seleccionar foto</label>
            </div>
            <button type="submit" class="btn save-btn mt-4">Save</button>
        </form>
    </div>
@endsection
