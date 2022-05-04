<?php

use App\Http\Controllers\FollowersController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\PlaylistSongsController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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


/*------------------------------------------Main routes-----------------------------------------------------------*/
Route::get('/', function () {
    return view('home/homeunregistered');
});

Route::get('/home', function () {
    return view('home/home');
})->middleware('auth');

/*------------------------------------------Resource routes-----------------------------------------------------------*/
Route::resources([
    'users' => UserController::class,
    'songs' => SongController::class,
    'playlists' => PlaylistController::class
]);


/*------------------------------------------Relationship Resource routes-----------------------------------------------------------*/
Route::resources([
    'followers' => FollowersController::class,
    'playlistsongs' => PlaylistSongsController::class
]);

/*------------------------------------------Login/Logout routes--------------------------------------------------------------*/
//GET login view
Route::get('/login', function () { return view('login'); })->name('login');

//POST login
Route::post('/login', 'App\Http\Controllers\LoginController@authenticate');

//GET logout
Route::get('/logout', 'App\Http\Controllers\LoginController@destroy');

//Browser
Route::get('/browse', 'App\Http\Controllers\SearchController@browse');



/*------------------------------------------Sign Up routes------------------------------------------------------------*/
//GET signup view
Route::get('/signup', function () { return view('signup'); })->name('signup');

//POST signup
Route::post('/signup', 'App\Http\Controllers\SignUpController@register');

/*------------------------------------------Profile route-------------------------------------------------------------*/
//GET profile view with the logged user
Route::get('/profile', function () {
    $userWithPlaylists = Auth::user()->load("playlists");
    return view('profile',['user' => $userWithPlaylists]);
})->middleware('auth');


/*-------------------------------------------Admin routes-------------------------------------------------------------*/
Route::get('/users', function () {
    $users = DB::table('users') -> get();
    return view('admin_users_panel', ['users' => $users]);
})->middleware('auth');

Route::get('/songs', function () {
    $songs = DB::table('songs') ->get();
    return view('admin_songs_panel', ['songs' => $songs]);
})->middleware('auth');

Route::get('/playlists', function () {
    $playlists =  App\Models\Playlist::with('user', 'users', 'songs')->get();
    return view('admin_playlists_panel', ['playlists' => $playlists]);
})->middleware('auth');



/*------------------------------------------User routes---------------------------------------------------------------*/
Route::get('/userplaylists', function () {
    $userWithPlaylists = Auth::user()->load("playlists", "playlists.users");
    return view('playlists_panel', ['userWithPlaylists' => $userWithPlaylists]);
})->middleware('auth');

Route::get('/usersongs', function () {
    return view('songs_panel');
})->middleware('auth');

Route::get('/search', function () {
    return view('search_dashboard');
})->middleware('auth');


/*------------------------------------------Pruebas route-------------------------------------------------------------*/
