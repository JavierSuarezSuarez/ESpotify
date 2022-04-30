<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlaylistRequest;
use App\Http\Requests\UpdatePlaylistRequest;
use App\Models\Playlist;
use Illuminate\Support\Facades\Auth;

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
            'nombre' => 'required'
        ]);

        if($validated) {
            $playlist = new Playlist();
            $playlist->user_id = $request->user_id;
            $playlist->nombre = $request->nombre;
            $playlist->imagen = $request->imagen;
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
        $playlistWithrelation = Playlist::with("user" )->where('id','=',$playlist->id)->get()->first();
        return view('playlist', ["playlist" => $playlistWithrelation]);
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
            'nombre' => 'required'
        ]);

        $playlist = Playlist::where('id', $id)->firstOrFail();

        $playlist->nombre = $request->nombre;
        $playlist->imagen = $playlist->imagen;
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
