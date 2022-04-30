<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrowserController extends Controller
{
    public function browse(Request $request){
        $nombres = Songs::("nombre",'like',$request->."%")-> take(10)->get();
        return view('admin_songs_panel', compact("nombres"));
    }

    }
}
