<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSongRequest;
use App\Http\Requests\UpdateSongRequest;
use App\Models\Song;


class SongController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-song-form', ["song" => new Song()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSongRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSongRequest $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'artistas' => 'required',
            'album' => 'required',
            'url' => 'required',
        ]);
        if($validated) {
            $song = new Song();
            $song->user_id = 1;
            $song->nombre = $request->nombre;
            $song->artistas = $request->artistas;
            $song->album = $request->album;
            $song->url = $request->url;
            $song->imagen = $request->imagen;
            $song->save();
            return redirect("/songs");
        }
        return redirect("/songs");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        return view('song', ["song" => $song]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        return view('admin-song-form', ["song" => $song]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
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
     *
     * @param  int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $songtoDelete = Song::find($id);
        $songtoDelete -> delete();
        return redirect('/songs');
    }
}
