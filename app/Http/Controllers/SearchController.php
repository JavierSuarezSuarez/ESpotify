<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\Song;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function browse(Request $request){

        switch($request->flag){
            case 'search':
                if($request->Search){
                    $searchPlaylists = Playlist::with('user', 'users', 'songs')->where('nombre','LIKE','%'.$request->Search.'%')->get();

                    $searchSongs = DB::table('songs')->where('nombre','LIKE','%'.$request->Search.'%')
                        ->orWhere('artistas','LIKE','%'.$request->Search.'%')->get();

                    return view('search_dashboard', ["buscar" =>"si", "playlists"=>$searchPlaylists, "songs"=> $searchSongs]);
                }
                return redirect()->to('/search');
            break;

            case 'songs':
                if($request->Search){
                    $songs = DB::table('songs')->where('nombre','LIKE','%'.$request->Search.'%')
                        ->orWhere('artistas','LIKE','%'.$request->Search.'%')->get();
                    return view('admin_songs_panel', ["buscar" =>$songs]);
                }
                return redirect()->to('/songs');
            break;

            case 'users':
                if($request->Search){
                    $users = DB::table('users')->where('nombre','LIKE','%'.$request->Search.'%')
                        ->orWhere('apellidos','LIKE','%'.$request->Search.'%')->get();
                    return view('admin_users_panel', ["buscar" =>$users]);
                }
                return redirect()->to('/users');
            break;

            case 'playlists':
                if($request->Search){
                    $playlists = Playlist::with('user', 'users', 'songs')->where('nombre','LIKE','%'.$request->Search.'%')->get();
                    return view('admin_playlists_panel', ["buscar" =>$playlists]);
                }
                return redirect()->to('/playlists');
            break;

            case "userplaylists":
                if($request->Search){
                    $userLogged = Auth::user();
                    $userplaylists =  Playlist::with('user')
                        ->where('user_id', '=', $userLogged->id)
                        ->where('nombre','LIKE','%'.$request->Search.'%')->get();

                    return view('playlists_panel', ["buscar" =>$userplaylists]);
                }
                return redirect()->to('/userplaylists');
            break;
            default:  return redirect()->to('/home');
        }
    }
}
