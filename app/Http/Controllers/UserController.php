<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource. Not implemented
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-user-form', ["userForm" => new User()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {

        //Gestionar rol del usuario a crear
        if($request->flexCheckDefault == "flag") {
            $request->tipo = "1";
        } else {
            $request->tipo = "2";
        }

        $validated = $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'email' => 'required',
            'password' => 'required',
            'foto' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $request['password'] = bcrypt($request['password']);

        if($foto = $request->file('foto')) {
            $destinationPath = 'images/uploaded/';
            $UserImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $UserImage);
            $UserImage = '/images/uploaded/' . $UserImage;
        } else {
            $UserImage = 'images/profile.png';
        }

        if($validated) {
            $user = new User();
            $user->nombre = $request->nombre;
            $user->apellidos = $request->apellidos;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->tipo = $request->tipo;
            $user->foto = $UserImage;
            $user->save();
            return redirect("/users");
        }
        return redirect("/users");
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin-user-form', ["userForm" => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, $id)
    {
        //Gestionar rol del usuario modificado
        if($request->flexCheckDefault == "flag") {
            $request->tipo = "1";
        } else {
            $request->tipo = "2";
        }
        $validated = $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'email' => 'required',
            'password' => 'required',
            'foto' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);

        $request['password'] = bcrypt($request['password']);


        $user = User::where('id', $id)->firstOrFail();

        if($foto = $request->file('foto')) {
            $destinationPath = 'images/uploaded/';
            $UserImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $UserImage);
            $UserImage = '/images/uploaded/' . $UserImage;
        }else {
            $UserImage =$user->foto;
        }

        $user->nombre = $request->nombre;
        $user->apellidos = $request->apellidos;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->tipo = $request->tipo;
        $user->foto = $UserImage;
        $user->save();


        //Dependiendo de si se ha modificado un usuario o el perfil propio, se redirige a un lado u otro
        $userLogged = Auth::user();
        if($userLogged->tipo == 1) {
            return redirect("/users");
        }else {
            return redirect("/profile");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $userLogged = Auth::user();
        $usertoDelete = User::find($id);
        $check = $usertoDelete;//Se guarda la instancia del usuario a eliminar para comprobar despues
        $usertoDelete -> delete();

        //Si un admin se borra a sí mismo, se le redirige a /
        if($userLogged->email == $check->email) {
            return redirect('/');
        }else {
            return redirect('/users');
        }
    }
}
