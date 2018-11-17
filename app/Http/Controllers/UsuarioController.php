<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $users = User::all();
            $users = User::paginate(15);
            return view('usuario.lista',['users'=> $users ]);          
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\titulo  $titulo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\titulo  $titulo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('usuario.edit',['users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\titulo  $titulo
     * @return \Illuminate\Http\Response
     */
    public function update($id )
    {
        User::findOrFail($id)->update($request->all());
        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\titulo  $titulo
     * @return \Illuminate\Http\Response
     */
      public function destroy($id)
    {
       $users=User::find($id);
       $users->delete();

       flash::error('El usuario ' . $users->name. 'a sido borrado');
       return redirect()-> route('usuario.lista');
    }

    public function ocultar($id)
    {
      $users=User::find($id);
      $users->delete();
     
       return redirect()-> route('usuario.index');
  
    } 
}
