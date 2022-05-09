<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use File;

class PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $playlistjson = File::get("public/playlistdata.json");
        $playlistsdata = json_decode($playlistjson);

        foreach ($playlistsdata as $key => $value) {
            DB::table('playlists') -> insert([
                "user_id" => $value -> user_id,
                "nombre" => $value -> nombre,
                "imagen" => $value -> imagen,
                "created_at" => $value -> created_at
            ]);
        }
    }
}
