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
            @csrf
            <h1 class="text-center">Create/Modify Playlist</h1>
            <label for="name" class="mt-2">Nombre</label>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="">
            </div>
            <label for="foto">Foto</label>
            <div class="custom-file container">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Seleccionar portada</label>
            </div>
            <button type="submit" class="btn save-btn mt-4">Save</button>
        </form>
    </div>
@endsection
