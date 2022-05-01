<?php

namespace App\Http\Controllers;

use App\Models\Followers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowersController extends Controller
{
    public function store(Request $request) {
        $relation = new Followers();
        $relation->playlist_id = $request->playlist_id;
        $relation->user_id = $request->user_id;
        $relation->save();

        return redirect(route('playlists.show',  $request->playlist_id));
    }

    public function destroy($playlistId) {

        $userLogged = Auth::user();

        $relationID = Followers::select('id')
            ->where('playlist_id','=',$playlistId)
            ->where('user_id','=',$userLogged->id)->get();

        Followers::destroy($relationID);

       return redirect(route('playlists.show',  $playlistId));

    }
}
