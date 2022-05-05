<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSongRequest;
use App\Http\Requests\UpdateSongRequest;
use App\Models\Song;
use App\Models\Playlist;
use Illuminate\Support\Facades\DB;


class SongController extends Controller
{


    /**
     * Display a listing of the resource. Not Implemented
     */
    public function index()
    {

        //Obtiene todas las canciones contenidas en las playlists creadas por el usuario X
        $createdPlaylistsSongs = DB::table('playlists')
            ->join('playlistssongs', 'playlists.id', '=', 'playlistssongs.playlist_id')
            ->join('songs', 'playlistssongs.song_id', '=', 'songs.id')
            ->where('playlists.user_id', '=', 2)
            ->orderBy('songs.artistas')
            ->distinct('songs.id')
            ->get();


        dd($createdPlaylistsSongs);
        return view('songs_panel');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-song-form', ["song" => new Song()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSongRequest $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'artistas' => 'required',
            'album' => 'required',
            'url' => 'required',
            'imagen' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if($imagen = $request->file('imagen')) {
            $destinationPath = 'images/uploaded/';
            $SongImage = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($destinationPath, $SongImage);
            $SongImage = '/images/uploaded/' . $SongImage;
        }else {
            $SongImage = '/images/song.jpg';
        }

        if($validated) {
            $song = new Song();
            $song->user_id = $request->user_id;
            $song->nombre = $request->nombre;
            $song->artistas = $request->artistas;
            $song->album = $request->album;
            $song->url = $request->url;
            $song->imagen = $SongImage;
            $song->save();
            return redirect("/songs");
        }
        return redirect("/songs");
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        return view('song', ["song" => $song]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        return view('admin-song-form', ["song" => $song]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSongRequest $request, $id)
    {
        //
        $validated = $request->validate([
            'nombre' => 'required',
            'artistas' => 'required',
            'album' => 'required',
            'url' => 'required',
            'imagen' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $song = Song::where('id', $id)->firstOrFail();

        if($imagen = $request->file('imagen')) {
            $destinationPath = 'images/uploaded/';
            $SongImage = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($destinationPath, $SongImage);
            $SongImage = '/images/uploaded/' . $SongImage;
        }else {
            $SongImage =$song->imagen;
        }

        $song->user_id = $song->user_id;
        $song->nombre = $request->nombre;
        $song->artistas = $request->artistas;
        $song->album = $request->album;
        $song->url = $request->url;
        $song->imagen = $SongImage;
        $song->save();

        return redirect("/songs");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $songtoDelete = Song::find($id);
        $songtoDelete -> delete();
        return redirect('/songs');
    }
}
