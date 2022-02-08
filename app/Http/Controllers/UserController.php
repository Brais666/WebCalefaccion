<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\User;
use App\Pedidos;
use Carbon\Carbon;

class UserController extends Controller
{

	public function index($id)
	{
        
		$users=User::find($id);
        $pedidos = Pedidos::where('id','=',$id)->latest('created_at','desc')->first();
        return view('User.cuenta',compact('users','pedidos'));
	}
	/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('User.create');
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
        $this->validate($request,[ 'nombre'=>'required', 'email'=>'required', 'password'=>'required', 'admin'=>'required']);
        User::create($request->all());
        return redirect()->route('User.show')->with('success','Registro creado satisfactoriamente');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::find($id);
        return  view('User.show',compact('user'));
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user=User::find($id);
        return view('User/edit',compact('user'));
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
       // $this->validate($request,[ 'nombre'=>'required', 'email'=>'required', 'password'=>'required', 'admin'=>'required','apellidos'=>'required']);
        $id = auth()->user()->id;
        $user = User::find($id);
        $user->id = $id;
        if(is_null($request->get('txtTelefono')))
        {
             $user->telefono = auth()->user()->telefono;
        }
        else
        {
            $user->telefono = intval($request->get('txtTelefono'));
        }
        //dd($user->telefono);
        //$user->created_at = $request->get('txtCreated');
       // $user->dni = $request->get('txtDni');
       if(is_null($request->get('txtDireccion')))
        {
             $user->address = auth()->user()->address;
        }
        else
        {
            $user->address = $request->get('txtDireccion');
        }
    
        if(is_null($request->get('txtCodigopost')))
        {
             $user->CP = auth()->user()->CP;
        }
        else
        {
            $user->CP = $request->get('txtCodigopost');
        }
        
        if(is_null($request->get('txtLocalidad')))
        {
             $user->localidad = auth()->user()->localidad;
        }
        else
        {
            $user->localidad = $request->get('txtLocalidad');
        }
        
        if(is_null($request->get('txtProvincia')))
        {
             $user->provincia = auth()->user()->provincia;
        }
        else
        {
            $user->provincia = $request->get('txtProvincia');
        }
        //dd($user);
 
        $user->update(); 
        return redirect('cuenta')->with('success', 'Datos guardados correctamente');
 
    }


    /*
    public function update(Request $request, $id)    {
        //
        $this->validate($request,[ 'nombre'=>'required', 'email'=>'required', 'password'=>'required', 'admin'=>'required','apellidos'=>'required']);
 
        User::find($id)->update($request->all());
        return redirect()->route('user')->with('success','Registro actualizado satisfactoriamente');
 
    }*/
 
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
