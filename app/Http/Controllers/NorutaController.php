<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidarFormularioRequest;
use App\Http\Requests\NorutaFormRequest;
use App\Noruta;
use Illuminate\Http\Request;

class NorutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*$pobl=$request->get('poblacion');
               
        if ($request->get('poblacion')) {
            //$poblacion = Ruta::where('poblacion', '=', Input::get('poblacion'));
            //$postal = Ruta::where('codigopost', '=', Input::get('poblacion'))->first();
            //if (($poblacion > 0) || ($postal >0))
            //{
           // }
            //else
            //{
               return view ('bienvenido') ;
            //}

            
        }
        else
        {
           return view('consulta.index');
        }  */
        return view('consulta.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('consulta.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       /* $request->validate([
            'id'=>'required',
            'oferta'=> 'required',
            'fecha_ini'=> 'required',
            'fecha_fin'=> 'required',
            'tipo'=> 'required',
            'rang'=> 'required'
            'desc_oferta' => 'required',
            'rang'=> 'required'
        ]);*/
 
        $noruta = new Noruta([
            'nombre'=> $request->get('txtNombre'),
            'email'=> $request->get('txtEmail'),
            'telefono'=> $request->get('txtTelefono'),
            'poblacion'=> $request->get('txtPoblacion')
            
        ]);

        $noruta->save();
        //dd($noruta);
        return view('welcome')->with('success', 'Datos enviados correctamente');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
