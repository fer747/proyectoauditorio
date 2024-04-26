<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role',1)->get();
        return view('admin.users.index')->with(compact('users'));
    }

    public function store(Request $request)
    {
        $rules = [
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'contraseña' => ['required', 'string', 'min:8']

        ];

        $messages = [
            'nombre.required' => 'Es necesario ingresar el nombre del usuario.',
            'nombre.max' => 'El nombre es demasiado extenso.'

        ];
        $this -> validate($request, $rules, $messages);

        $user = new User();
        $user -> name = $request -> input('nombre');
        $user -> email = $request -> input('email');
        $user -> password = bcrypt($request -> input('contraseña'));
        $user -> role = 1;

        $user -> save();

        return back()->with('notification','Usuario registrado exitosamente.');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit')->with(compact('user'));
    }

    public function update($id,Request $request)
    {
        
        $rules = [
            'nombre' => ['required', 'string', 'max:255'], 
            'contraseña' => ['string', 'min:8']

        ];

        $messages = [
            'nombre.required' => 'Es necesario ingresar el nombre del usuario.',
            'nombre.max' => 'El nombre es demasiado extenso.'

        ];
        $this -> validate($request, $rules, $messages);
        $user = User::find($id);

        $user -> name = $request->input('nombre');
        $password = $request->input('contraseña');
        if($password)
            $user->password = bcrypt($password);

        $user -> save();

        return back()->with('notification','Usuario modificado exitosamente.');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return back()->with('notification','El usuario se ha dado de baja correctamente');
    }

}
