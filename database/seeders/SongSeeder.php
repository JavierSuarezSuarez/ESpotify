<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Song;
use File;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $songjson = File::get("public/songdata.json");
        $songsdata = json_decode($songjson);

        foreach ($songsdata as $key => $value) {
            DB::table('songs') -> insert([
                "user_id" => $value -> user_id,
                "nombre" => $value -> nombre,
                "imagen" => $value -> imagen,
                "artistas" => $value -> artistas,
                "album" => $value -> album,
                "genero" => $value -> genero,
                "url" => $value -> url,
            ]);
        }
    }
}
