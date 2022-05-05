<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'nombre',
        'imagen',
        'artistas',
        'album',
        'genero',
        'url',
    ];


    /*-------------------------------------------------Relationships------------------------------------------------*/

    //One to Many: Admin User that added the song
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Many to Many: Playlists where the song is in
    public function playlists()
    {
        return $this->belongsToMany(Playlist::class, 'playlistssongs')->using(PlaylistSongs::class)->withTimestamps();;
    }
}
