<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidarFormularioRequest;
use App\Http\Requests\CasirutaFormRequest;
use App\Noruta;
use Illuminate\Http\Request;

class CasirutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('consulta2.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('consulta2.index');
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
        //dd($noruta);

        $noruta->save();
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
