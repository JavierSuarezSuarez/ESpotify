<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function browse(Request $request){

        if($request->Search){
            $songs = DB::table('songs')->where('nombre','LIKE','%'.$request->Search.'%')->get();

            //$songs = Song::select("*")->where("nombre","LIKE",'{$request->Search}%');
            //dd($songs);-->
            return view('admin_songs_panel', ["buscar" =>$songs]);
        }

        return redirect()->to('/songs');

        /*
        $nombres = Songs::where("nombre",'like',$request->text."%")->take(10)->get(); paginate(5)
        return   view("admin_songs_panel", compact("nombres"));
        */

        /*
        $busqueda = $request->input('Search');
        $nombres = Songs::query()
            ->where('nombre', 'LIKE', "%{$busqueda}%")
            ->orderBy('id','desc')
            ->paginate(1);
        return view('admin_songs_panel', compact('nombres'));
        */

    }
}
