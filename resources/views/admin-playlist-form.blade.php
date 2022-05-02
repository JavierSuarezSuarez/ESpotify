<?php
$user = Illuminate\Support\Facades\Auth::user();
?>
@extends( ($user -> tipo == 1) ? 'layouts/admin-layout':'layouts/registered-user-layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin-forms.css') }}">
@stop

@section('mainContent')
    <div class="d-flex justify-content-center form-container">
        <form action="{{ $playlist->id == null ? route('playlists.store') : '/playlists/'.$playlist->id }}" method="POST" enctype="multipart/form-data" class="admin-form border rounded p-5 bg-light mt-4 mb-4">
            @if ($playlist->id) {{ method_field('PUT') }} @endif
            @csrf

            @if ($playlist->id) <h1 class="text-center text-light">Modificar Playlist</h1>
            @else <h1 class="text-center text-light">Crear Playlist</h1>@endif

            <label for="name" class="mt-2 text-light">Nombre</label>
            <div class="form-group">
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="" value="{{old('nombre', $playlist->nombre)}}">
            </div>

            <label for="foto" class="text-light">Foto</label>
            <div class="custom-file container">
                <input type="file" id="imagen" name="imagen" class="custom-file-input" id="customFile" value="{{old('imagen', $playlist->imagen)}}">
                <label class="custom-file-label" for="customFile">Seleccionar portada</label>
            </div>

            @if ($playlist->id == null) <input name="user_id" type="hidden" value="{{$user -> id}}"> @endif

            <input name="tipo" type="hidden" value="{{$user -> tipo}}">
            <button type="submit" class="btn save-btn mt-4">Confirmar</button>
        </form>
    </div>
@endsection
