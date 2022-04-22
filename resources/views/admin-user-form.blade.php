<?php
$user = Illuminate\Support\Facades\Auth::user();
?>
@extends( ($user -> tipo == 1) ? 'layouts/admin-layout':'layouts/registered-user-layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin-forms.css') }}">
@stop

@section('mainContent')
    <div class="d-flex justify-content-center form-container">
        <form action ="{{ $userForm->id == null ? route('users.store') : '/users/'.$userForm->id }}" method="POST" class="admin-form border rounded p-5 bg-light mt-4 mb-4">
            @if ($userForm->id) {{ method_field('PUT') }} @endif
            @csrf

            @if ($userForm->id) <h1 class="text-center">Modify User</h1>
            @else <h1 class="text-center">Create User</h1>@endif

            <label for="nombre" class="mt-2">Nombre</label>
            <div class="form-group">
                <input id="nombre" name="nombre" type="text" class="form-control" placeholder="" value="{{old('nombre', $userForm->nombre)}}">
            </div>

            <label for="apellidos">Apellidos</label>
            <div class="form-group">
                <input id="apellidos" name="apellidos" type="text" class="form-control" placeholder="" value="{{old('apellidos', $userForm->apellidos)}}">
            </div>

            <label for="email">Email</label>
            <div class="form-group">
                <input id="email" name="email" type="email" class="form-control" placeholder="" value="{{old('email', $userForm->email)}}">
            </div>

            <label for="password">Contraseña</label>
            <div class="form-group">
                <input id="password" name="password" type="password" class="form-control" placeholder="" value="{{old('password', $userForm->password)}}">
            </div>

            <label for="foto">Foto</label>
            <div class="custom-file container">
                <input id="customFile" name="foto" type="file" class="custom-file-input" value="{{old('foto', $userForm->foto)}}">
                <label class="custom-file-label" for="customFile">Seleccionar foto</label>
            </div>

            <div class="form-check mt-4">

                <!--Se comprueba si se esta modificando un usuario administrador para marcar por defecto el checkbox o no -->
                @if ($userForm->tipo == 1)
                    <input id="flexCheckDefault" name="flexCheckDefault" class="form-check-input" type="checkbox" value="flag" checked>
                    <input name="tipo" type="hidden" value="1">
                    <label class="form-check-label" for="flexCheckDefault">Admin</label>
                @else
                    @if ($user->tipo == 1)
                        <input id="flexCheckDefault" name="flexCheckDefault" class="form-check-input" type="checkbox" value="flag">
                        <input name="tipo" type="hidden" value="2">
                        <label class="form-check-label" for="flexCheckDefault">Admin</label>
                    @endif
                @endif

            </div>
            <button type="submit" class="btn save-btn mt-4">Save</button>
        </form>
    </div>
@endsection
