<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\User;
use Auth;
use Carbon\Carbon;

class AdminController extends Controller
{

	public function index()
	{
		

		
	}
	/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
       $usuario = User::find(Auth::User()->id);
       if(empty($usuario)){
          Flash::error('mensaje error');
          return redirect()->back();
       }
       return view('Admin.edit')->with('usuario', $usuario);
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)    {
        //
         $usuario = User::find(Auth::User()->id);
       if(empty($usuario)){
          Flash::error('mensaje error');
          return redirect()->back();
       }
       $usuario->fill($request->all());
       $usuario->save();
       Flash::success('Perfil actualizado con éxito.');
       return redirect(route('Admin.edit'));
 
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        User::find($id)->delete();
        return redirect()->route('User.index')->with('success','Registro eliminado satisfactoriamente');
    }


	public function __invoke($name, $nickname = null)
	{
	    // ...
	}


	
}
