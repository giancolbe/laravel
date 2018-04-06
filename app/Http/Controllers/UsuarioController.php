<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use Cinema\User;
use Cinema\Http\Requests\UserCreateRequest;
use Cinema\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Hash;


class UsuarioController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
        // $users = User::paginate(3); // MUESTRA TODOS LOS REGISTROS
        // $users = User::onlyTrashed()->paginate(3); // MUESTRA LOS REGISTROS QUE HAN SIDO ELIMINADOS LOGICAMENTE

        $users = User::paginate(5); // MUESTRA LOS REGISTROS PAGINADOS
        return view('usuario.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response 
     */

    public function create()
    {
        return view('usuario.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        // return('hola mundo'); // RETORNANDO UN TEXTO  
        
        // FORMA COMPLETA DE HACERLO
        
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);                   
        
        //User::create($request->all());  // OPTIMIZANDO LA FORMA NORMAL

        return redirect('/usuario')->with('message','Usuario creado correctamente');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id); 
        return view ('usuario.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request,$id)
    {
        $user = User::find($id);
        //$user->fill($request->all());
        $user->fill([
            'name' => $request['name'],
            'email' => $request['email'],
            //'password' => Hash::make($request['password'])
            //'password' => $request['password']
        ]);
        $user->save();

        Session::flash('message','Usuario editado correctamente');
        return Redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Session::flash('message','Usuario eliminado correctamente');
        return Redirect::to('/usuario');
    }
}
