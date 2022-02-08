<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

class GestoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gestores = User::where('admin','like',0)->orwhere('admin','like',1)->orwhere('admin','like',2)->orwhere('admin','like',3)->orwhere('admin','like',4)->orderBy('admin','ASC')->paginate(5);
        return view('gestores.list', compact('gestores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestores.create');
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
            'nombre'=> 'required',
            'pvp'=> 'required',
            'rang' => 'required',
            'empresa'=> 'required'
        ]);*/
 
        $cliente = new Cliente([
            'id' => $request->get('txtId'),
            'codigoempresa' => $request->get('txtCodigo'),
            'dni' => $request->get('txtDni'),
            'nombre'=> $request->get('txtNombre'),
            'apellido'=> $request->get('txtApellido'),
            'apellidoseg'=> $request->get('txtApellidoseg'),
            'calle'=> $request->get('txtCalle'),
            'numero'=> $request->get('txtNumero'),
            'poblacion'=> $request->get('txtPoblacion'),
            'cp'=> $request->get('txtCp'),
            'provincia'=> $request->get('txtProvincia'),
            'perscontacto'=> $request->get('txtPerscontacto'),
            'tel1'=> $request->get('txtTel1'),
            'tel2'=> $request->get('txtTel2'),
            'tel3'=> $request->get('txtTel3'),
            'email'=> $request->get('txtEmail'),
            'fecha_nacimiento'=> $request->get('txtFechanacimiento'),
            'forma_pago'=> $request->get('txtFormapago')
        ]);
 
        $cliente->save();
        return redirect('/clientes')->with('success', 'Cliente añadido correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        return view('clientes.view',compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         /*  $request->validate([
            'id'=>'required',
            'nombre'=> 'required',
            'pvp'=> 'required',
            'rang' => 'required'
        ]);*/
 
 
        $cliente = Cliente::find($id);
        $cliente->id = $request->get('txtId');
        $cliente->id = $request->get('txtCodigo');
        $cliente->id = $request->get('txtDni');
        $cliente->nombre= $request->get('txtNombre');                       
        $cliente->apellido = $request->get('txtApellido');
        $cliente->apellidoseg = $request->get('txtApellidoseg');
        $cliente->calle = $request->get('txtCalle');
        $cliente->numero = $request->get('txtNumero');
        $cliente->poblacion = $request->get('txtPoblacion');
        $cliente->cp = $request->get('txtCp');
        $cliente->provincia = $request->get('txtProvincia');
        $cliente->perscontacto = $request->get('txtPerscontacto');
        $cliente->tel1 = $request->get('txtTel1');
        $cliente->tel2 = $request->get('txtTel2');
        $cliente->tel3 = $request->get('txtTel3');
        $cliente->email = $request->get('txtEmail');
        $cliente->fecha_nacimiento = $request->get('txtFechanacimiento');
        $cliente->forma_pago = $request->get('txtFormapago');
 
        $cliente->update();
 
        return redirect('/clientes')->with('success', 'Cliente actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
         $producto->delete();
        return redirect('/clientes')->with('success', 'Cliente eliminado correctamente');
    }
}
