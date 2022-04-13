<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/




Route::get('/', function () {
    return view('index');
});

/*-------------------------------------------Admin routes: This will change to /admin/id/x----------------------------*/
Route::get('/users', function () {
    $users = DB::table('users') -> get();
    return view('admin_users_panel', ['users' => $users]);
});

Route::get('/playlists', function () {
    return view('admin_playlists_panel');
});

Route::get('/songs', function () {
    return view('admin_songs_panel');
});


/*------------------------------------------User routes: This will change to /user/id/x-------------------------------*/
Route::get('/userplaylists', function () {
    return view('playlists_panel');
});

Route::get('/usersongs', function () {
    return view('songs_panel');
});

Route::get('/search', function () {
    return view('search_dashboard');
});

Route::get('/header', function () {
    return view('layouts/header-layout');
});

Route::get('/prueba', function () {
    return view('layouts/header-layout');
});



Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/profile', function () {
    return view('profile');
});
