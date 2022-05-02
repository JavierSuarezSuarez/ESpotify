<?php

namespace App\Http\Controllers;

use App\Models\PlaylistSongs;
use Illuminate\Http\Request;

class PlaylistSongsController extends Controller
{

    public function store(Request $request)
    {
        $relation = new PlaylistSongs();
        $relation->playlist_id = $request->playlist_id;
        $relation->song_id = $request->song_id;
        $relation->save();
        return redirect(route('playlists.show',  $request->playlist_id));
    }


    public function destroy($x)
    {
        dd($x);

        /*$relationID = PlaylistSongs::select('id')
            ->where('playlist_id','=',$playlistId)
            ->where('song_id','=',$songId)->get();

        PlaylistSongs::destroy($relationID);
        return redirect(route('playlists.show',  $playlistId));*/
    }
}
