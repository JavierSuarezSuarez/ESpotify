<?php
$user = Illuminate\Support\Facades\Auth::user();
?>
@extends('layouts/admin-layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin-forms.css') }}">
@stop

@section('mainContent')
    <div class="d-flex justify-content-center form-container">
        <form class="admin-form border rounded p-5 bg-light mt-4 mb-4">
            <h1 class="text-center">Create/Modify User</h1>
            <label for="name" class="mt-2">Nombre</label>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="">
            </div>
            <label for="apellidos">Apellidos</label>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="">
            </div>
            <label for="email">Email</label>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="">
            </div>
            <label for="password">Contraseña</label>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="">
            </div>
            <label for="foto">Foto</label>
            <div class="custom-file container">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Seleccionar foto</label>
            </div>
            <div class="form-check mt-4">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">Admin</label>
            </div>
            <button type="button" class="btn save-btn mt-4">Save</button>
        </form>
    </div>
@endsection
