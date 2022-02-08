<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidarFormularioRequest;
use App\Tarifa;
use Auth;
use Illuminate\Http\Request;

class TarifaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        switch(Auth::User()->admin)
        {
            case 0:
            default:
               // $tarifas = Tarifa::all();
                $tarifa1 = Tarifa::where('rango1', '=',0)->where('zona','=', 001)->latest('created_at','asc')->first();
                $tarifa2 = Tarifa::where('rango1', '=',400)->where('zona','=', 001)->latest('created_at','asc')->first();
                $tarifa3 = Tarifa::where('rango1', '=',1000)->where('zona','=', 001)->latest('created_at','asc')->first();
                $tarifa4 = Tarifa::where('rango1', '=',0)->where('zona','=', 002)->latest('created_at','asc')->first();
                $tarifa5 = Tarifa::where('rango1', '=',400)->where('zona','=', 002)->latest('created_at','asc')->first();
                $tarifa6 = Tarifa::where('rango1', '=',1000)->where('zona','=', 002)->latest('created_at','asc')->first();
                $tarifa7 = Tarifa::where('rango1', '=',0)->where('zona','=', 003)->latest('created_at','asc')->first();
                $tarifa8 = Tarifa::where('rango1', '=',400)->where('zona','=', 003)->latest('created_at','asc')->first();
                $tarifa9 = Tarifa::where('rango1', '=',1000)->where('zona','=', 003)->latest('created_at','asc')->first();

                return view('Admin.tarifas.list', compact('tarifa1','tarifa2','tarifa3','tarifa4','tarifa5','tarifa6','tarifa7','tarifa8','tarifa9'));
            break;
            case 1:
            
               // $tarifas = Tarifa::all();
                $tarifa1 = Tarifa::where('rango1', '=',0)->where('zona','=', 003)->latest('created_at','asc')->first();
                $tarifa2 = Tarifa::where('rango1', '=',400)->where('zona','=', 003)->latest('created_at','asc')->first();
                $tarifa3 = Tarifa::where('rango1', '=',1000)->where('zona','=', 003)->latest('created_at','asc')->first();

                return view('Admin.catalunya.tarifas.list', compact('tarifa1','tarifa2','tarifa3'));
            break;
            case 2:
               // $tarifas = Tarifa::all();
                $tarifa1 = Tarifa::where('rango1', '=',0)->where('zona','=', 001)->latest('created_at','asc')->first();
                $tarifa2 = Tarifa::where('rango1', '=',400)->where('zona','=', 001)->latest('created_at','asc')->first();
                $tarifa3 = Tarifa::where('rango1', '=',1000)->where('zona','=', 001)->latest('created_at','asc')->first();
                

                return view('Admin.Madrid.tarifas.list', compact('tarifa1','tarifa2','tarifa3'));
            break;
            case 3:
               // $tarifas = Tarifa::all();
                $tarifa1 = Tarifa::where('rango1', '=',0)->where('zona','=', 003)->latest('created_at','asc')->first();
                $tarifa2 = Tarifa::where('rango1', '=',400)->where('zona','=', 003)->latest('created_at','asc')->first();
                $tarifa3 = Tarifa::where('rango1', '=',1000)->where('zona','=', 003)->latest('created_at','asc')->first();
                

                
                return view('Admin.Valencia.tarifas.list', compact('tarifa1','tarifa2','tarifa3'));
            break;
             case 4:
               // $tarifas = Tarifa::all();
                $tarifa1 = Tarifa::where('rango1', '=',0)->where('zona','=', 001)->latest('created_at','asc')->first();
                $tarifa2 = Tarifa::where('rango1', '=',400)->where('zona','=', 001)->latest('created_at','asc')->first();
                $tarifa3 = Tarifa::where('rango1', '=',1000)->where('zona','=', 001)->latest('created_at','asc')->first();
                $tarifa4 = Tarifa::where('rango1', '=',0)->where('zona','=', 004)->latest('created_at','asc')->first();
                $tarifa5 = Tarifa::where('rango1', '=',400)->where('zona','=', 004)->latest('created_at','asc')->first();
                $tarifa6 = Tarifa::where('rango1', '=',1000)->where('zona','=', 004)->latest('created_at','asc')->first();

                
                return view('Admin.MadCat.tarifas.list', compact('tarifa1','tarifa2','tarifa3','tarifa4','tarifa5','tarifa6'));
            break;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('Admin.tarifas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $now =new \DateTime();
         $now = $now->format('Y-m-d H:i:s');
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
 
        $tarifa = new Tarifa([
            'producto'=> $request->get('txtProducto'),
            'fecha_modificacion'=> $now,
            'rango1'=> $request->get('txtRango1'),
            'rango2'=> $request->get('txtRango2'),
            'precio'=> $request->get('txtPrecio'),
            'zonadesc'=> $request->get('txtZonadesc'),
            'idzona'=> $request->get('txtIdzona'),
            'zona'=> $request->get('txtZona')
        ]);

        $tarifa->save();
        return redirect('/tarifas')->with('success', 'tarifa añadida correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tarifa  $tarifa
     * @return \Illuminate\Http\Response
     */
    public function show(Tarifa $tarifa)
    {
        
        return view('Admin.tarifas.view',compact('tarifa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarifa  $tarifa
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarifa $tarifa)
    {
        return view('tarifas.edit',compact('tarifa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarifa  $tarifa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        /*  $request->validate([
            'id'=>'required',
            'nombre'=> 'required',
            'pvp'=> 'required',
            'rang' => 'required'
        ]);*/
 
 
        $tarifa = Tarifas::find($id);
        $tarifa->id = $request->get('txtId');
        $tarifa->producto= $request->get('txtProducto');
        $tarifa->fecha_modificacion= $request->get('txtFecha_modificacion');
        $tarifa->rango1 = $request->get('txtRango1');
        $tarifa->rango2 = $request->get('txtRango2');
        $tarifa->precio = $request->get('txtPrecio');
        $tarifa->zonadesc = $request->get('txtZonadesc');
        $tarifa->idzona = $request->get('txtIdzona');
        $tarifa->zona = $request->get('txtZona');
 
        $tarifa->update();
 
        return redirect('/tarifas')->with('success', 'Tarifa actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarifa  $tarifa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarifa $tarifa)
    {
        $tarifa->delete();
        return redirect('/tarifas')->with('success', 'Tarifa eliminada correctamente');
    }
}
