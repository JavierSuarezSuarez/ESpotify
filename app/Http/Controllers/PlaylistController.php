<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlaylistRequest;
use App\Http\Requests\UpdatePlaylistRequest;
use App\Models\Followers;
use App\Models\Playlist;
use App\Models\Song;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource. Not implemented
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-playlist-form', ["playlist" => new Playlist()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlaylistRequest $request)
    {

        $validated = $request->validate([
            'nombre' => 'required',
            'imagen' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        if($imagen = $request->file('imagen')) {
            $destinationPath = 'images/uploaded/';
            $PlaylistImage = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($destinationPath, $PlaylistImage);
            $PlaylistImage = '/images/uploaded/' . $PlaylistImage;
        }else {
            $PlaylistImage ='/images/playlist_cover.png';
        }


        if($validated) {
            $playlist = new Playlist();
            $playlist->user_id = $request->user_id;
            $playlist->nombre = $request->nombre;
            $playlist->imagen = $PlaylistImage;
            $playlist->save();
            if($request -> tipo == 1) return redirect("/playlists");
            else return redirect("/userplaylists");
        }
        if($request -> tipo == 1) return redirect("/playlists");
        else return redirect("/userplaylists");
    }

    /**
     * Display the specified resource.
     */
    public function show(Playlist $playlist)
    {
        //Relation One to Many
        $playlistWithrelation = Playlist::with("user" )->where('id','=',$playlist->id)->get()->first();

        //Relation Many to Many (Followers)
        $userLogged = Auth::user();
        $followerRelation = DB::table('followers')
            ->where('playlist_id', '=', $playlist->id)
            ->where('user_id', '=', $userLogged->id)->get();

        //Relation Many to Many (PlaylistSongs)
        $playlistSongs = Playlist::where('id','=',$playlist->id)->with("songs" )->get()->first();
        $songsModal =  DB::table('songs')->get();

        return view('playlist', ["playlist" => $playlistWithrelation, "followerRelation" => $followerRelation,
                                      "songsModal" => $songsModal, "playlistSongs" => $playlistSongs]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Playlist $playlist)
    {
        return view('admin-playlist-form', ["playlist" => $playlist]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlaylistRequest $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'imagen' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $playlist = Playlist::where('id', $id)->firstOrFail();

        if($imagen = $request->file('imagen')) {
            $destinationPath = 'images/uploaded/';
            $PlaylistImage = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($destinationPath, $PlaylistImage);
            $PlaylistImage = '/images/uploaded/' . $PlaylistImage;
        } else {
            $PlaylistImage =$playlist->imagen;
        }

        $playlist->nombre = $request->nombre;
        $playlist->imagen = $PlaylistImage;
        $playlist->save();

        if($request -> tipo == 1) return redirect("/playlists");
        else return redirect("/userplaylists");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $playlistToDelete = Playlist::find($id);
        $playlistToDelete -> delete();

        $userLogged = Auth::user();
        if($userLogged -> tipo == 1) return redirect("/playlists");
        else return redirect("/userplaylists");
    }
}
