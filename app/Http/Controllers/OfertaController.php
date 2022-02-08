<?php

namespace App\Http\Controllers;

use App\Oferta;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class OfertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $rowperpage = $request->get('rowperpage');
               
        /*if ($request->get('texto')) {
            $texto=trim($request->get('texto'));
           
             # Si hay búsqueda, agregamos el filtro
            $ofertas= Oferta::where('oferta','LIKE', "%$texto%")->paginate();
        }
        else
        {*/
            $ofertas = Oferta::simplePaginate(10);
        /*}*/     

       if ($request->get('rowperpage')) {
           /* $texto=trim($request->get('texto'));*/
            
             $ofertas = Oferta::simplePaginate($rowperpage);
             
        }
        else
        {
             $ofertas = Oferta::simplePaginate(10);
        }      
              
        return view('ofertas.list', compact('ofertas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ofertas.create');
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
    if($request->get('txtTipo') == '€')
    {
        $oferta = new Oferta([
            'id' => $request->get('txtId'),
            'oferta'=> $request->get('txtOferta'),
            'fecha_ini'=> $request->get('txtFecha_ini'),
            'fecha_fin'=> $request->get('txtFecha_fin'),
            'tipo'=> $request->get('txtTipo'),
            'cantidad01'=> $request->get('txtCantidad'),
            'cantidad02' => 0,
            'desc_oferta'=> $request->get('txtDesc_oferta'),
            'usos' =>1000,
            'link' => $request->get('txtHREF'),
            'rango1'=> $request->get('txtRang'),
            'rango2'=> $request->get('txt2Rang'),
            'nombre'=> $request->get('nombre'),y
        ]);
        if($request->hasFile("imagen")){

            $imagen = $request->file("imagen");
            $nombreimagen = Str::slug($request->nombre).".".$imagen->guessExtension();
            $ruta = public_path("images/");

            //$imagen->move($ruta,$nombreimagen);
            copy($imagen->getRealPath(),$ruta.$nombreimagen);

            $imagen = $nombreimagen;            
            
        }

        $oferta->save();
    }
    elseif($request->get('txtTipo') == '%')
    {
        $oferta = new Oferta([
            'id' => $request->get('txtId'),
            'oferta'=> $request->get('txtOferta'),
            'fecha_ini'=> $request->get('txtFecha_ini'),
            'fecha_fin'=> $request->get('txtFecha_fin'),
            'tipo'=> $request->get('txtTipo'),
            'cantidad01'=> 0,
            'cantidad02' => $request->get('txtCantidad'),
            'desc_oferta'=> $request->get('txtDesc_oferta'),
            'usos' =>1000,
            'link' => $request->get('txtHREF'),
            'rango1'=> $request->get('txtRang'),
            'rango2'=> $request->get('txt2Rang'),
            'nombre'=> $request->get('nombre'),
        ]);
        if($request->hasFile("imagen")){

            $imagen = $request->file("imagen");
            $nombreimagen = Str::slug($request->nombre).".".$imagen->guessExtension();
            $ruta = public_path("images/");

            //$imagen->move($ruta,$nombreimagen);
            copy($imagen->getRealPath(),$ruta.$nombreimagen);

            $imagen = $nombreimagen;            
            
        }

        $oferta->save();
    }
        
        return redirect('/ofertas')->with('success', 'Oferta añadida correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function show(Oferta $oferta)
    {
         return view('ofertas.view',compact('oferta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function edit(Oferta $oferta)
    {
        return view('ofertas.edit',compact('oferta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Oferta  $oferta
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
 
 
        $oferta = Oferta::find($id);
        $oferta->id = $request->get('txtId');
        $oferta->oferta= $request->get('txtOferta');
        $oferta->fecha_ini= $request->get('txtFecha_ini');
        $oferta->fecha_fin = $request->get('txtFecha_fin');
        $oferta->tipo = $request->get('txtTipo');
        $oferta->cantidad = $request->get('txtCantidad');
        $oferta->desc_oferta = $request->get('txtDesc_oferta');
        $oferta->rang = $request->get('txtRang');
 
        $oferta->update();
 
        return redirect('/ofertas')->with('success', 'OFERTA actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oferta $oferta)
    {
        $oferta->delete();
        return redirect('/ofertas')->with('success', 'Oferta eliminada correctamente');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function slide(Request $request)
    {
        
        $rowperpage = $request->get('rowperpage');
               
        if ($request->get('texto')) {
            $texto=trim($request->get('texto'));
           
             # Si hay búsqueda, agregamos el filtro
            $ofertas= Oferta::where('oferta','LIKE', "%$texto%")->whereNotNull('nombre')->paginate();
        }
        else
        {
            $ofertas = Oferta::whereNotNull('nombre')->paginate(10);
        }  

       if ($request->get('rowperpage')) {
            $texto=trim($request->get('texto'));
            
             $ofertas = Oferta::whereNotNull('nombre')->paginate($rowperpage);
             
        }
        else
        {
             $ofertas = Oferta::whereNotNull('nombre')->paginate(10);
        }      
              
        return view('ofertas.list', compact('ofertas'));
    }
}
