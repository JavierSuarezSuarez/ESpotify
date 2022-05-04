<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
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
        'created_at'
    ];



    /*-------------------------------------------------Relationships------------------------------------------------*/

    //One to Many: User that added the playlist
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Many to Many: Followers
    public function users()
    {
        return $this->belongsToMany(User::class, 'followers')->using(Followers::class);
    }

    //Many to Many: Songs in the playlist
    public function songs()
    {
        return $this->belongsToMany(Song::class, 'playlistssongs')->using(PlaylistSongs::class)->withTimestamps();;
    }

}
