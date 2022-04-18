@extends('layouts/general-layout')

@section('mainContent')
    <div class="d-flex justify-content-center">
        <form class="admin-form border rounded p-5 bg-light mt-4 mb-4">
            <h1 class="text-center">Create/Modify Song</h1>
            <label for="name" class="mt-2">Nombre</label>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="">
            </div>
            <label for="artistas">Artistas</label>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="">
            </div>
            <label for="album">Album</label>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="">
            </div>
            <label for="url">Url</label>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="">
            </div>
            <label for="foto">Foto</label>
            <div class="custom-file container">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Seleccionar foto</label>
            </div>
            <button type="button" class="btn save-btn mt-4">Save</button>
        </form>
    </div>
@endsection
