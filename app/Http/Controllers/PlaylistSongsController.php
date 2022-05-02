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
        $relation->user_id = $request->user_id;
        $relation->save();
        return redirect(route('playlists.show',  $request->playlist_id));
    }


    public function destroy($playlistId, $songId)
    {
        $relationID = PlaylistSongs::select('id')
            ->where('playlist_id','=',$playlistId)
            ->where('song_id','=',$songId)->get();

        PlaylistSongs::destroy($relationID);
        return redirect(route('playlists.show',  $playlistId));
    }
}
