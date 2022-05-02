<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSongRequest;
use App\Http\Requests\UpdateSongRequest;
use App\Models\Song;


class SongController extends Controller
{


    /**
     * Display a listing of the resource. Not Implemented
     */
    public function index()
    {
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
            'imagen' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        if($imagen = $request->file('imagen')) {
            $destinationPath = 'images/';
            $SongImage = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($destinationPath, $SongImage);
            $input['imagen'] = "$SongImage";
            $SongImage = '/images/' . $SongImage;
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
        ]);

        $song = Song::where('id', $id)->firstOrFail();

        $song->user_id = $song->user_id;
        $song->nombre = $request->nombre;
        $song->artistas = $request->artistas;
        $song->album = $request->album;
        $song->url = $request->url;
        $song->imagen = $song->imagen;
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
