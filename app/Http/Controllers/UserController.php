<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin-user-form', ["userForm" => new User()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
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
        ]);
        $request['password'] = bcrypt($request['password']);

        if($validated) {
            $user = new User();
            $user->nombre = $request->nombre;
            $user->apellidos = $request->apellidos;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->tipo = $request->tipo;
            $user->foto = $request->foto;
            $user->save();
            return redirect("/users");
        }
        return redirect("/users");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        return view('admin-user-form', ["userForm" => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
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
        ]);

        $user = User::where('id', $id)->firstOrFail();

        $user->nombre = $request->nombre;
        $user->apellidos = $request->apellidos;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->tipo = $request->tipo;
        $user->foto = $user->foto;
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
     *
     * @param  int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
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
