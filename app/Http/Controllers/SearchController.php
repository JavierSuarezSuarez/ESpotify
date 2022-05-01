<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function browse(Request $request){

        switch($request->flag){
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

            default:  return redirect()->to('/home');

        }

    }

}
