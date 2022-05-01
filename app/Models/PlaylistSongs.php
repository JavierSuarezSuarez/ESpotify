<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PlaylistSongs extends Pivot
{
    public $table = "playlistssongs";
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'playlist_id',
        'song_id'
    ];
}
