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

Route::get('/songs', function () {
    $songs = DB::table('songs') ->get();
    return view('admin_songs_panel', ['songs' => $songs]);
});

Route::get('/playlists', function () {
    return view('admin_playlists_panel');
});

/*Route::get('/playlists', function () {
    $songs = DB::table('playlists')
        ->join('users', 'users.id', 'playlists.user_id')
        ->select('playlists.nombre', 'playlists.imagen', 'playlists.created_at', 'playlists.sum(songs)','users.nombre as usernombre')
        ->get();
    return view('admin_playlists_panel', ['playlists' => $playlists]);
});*/




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

Route::get('/profile', function () {
    return view('profile');
});

/*------------------------------------------Login routes--------------------------------------------------------------*/

//GET login view
Route::get('/login', function () {
    return view('login');
});

//POST login credentials
Route::post('/login', array(
    'uses' => 'App\Http\Controllers\LoginController@authenticate'
));

/*------------------------------------------Sign Up routes--------------------------------------------------------------*/
Route::get('/signup', function () {
    return view('signup');
});


