<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use File;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $userjson = File::get("public/userdata.json");
        $usersdata = json_decode($userjson);

        foreach ($usersdata as $key => $value) {
            DB::table('users') -> insert([
                "foto" => $value -> foto,
                "nombre" => $value -> nombre,
                "apellidos" => $value -> apellidos,
                "tipo" => $value -> tipo,
                "email" => $value -> email,
                "password" => $value -> password,
            ]);
        }
    }
}
