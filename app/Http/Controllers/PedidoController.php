<?php

namespace App\Http\Controllers;

use App\Pedido;
use Illuminate\Http\Request;
use Auth;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
       $admin = Auth::User()->admin;

        
       
        switch(Auth::User()->admin)
        { 
            ;
            case 0:
            default:

                 $rowperpage = $request->get('rowperpage');


                if ($request->get('texto')) {
                    $texto=trim($request->get('texto'));

                    $pedidos = Pedido::where('estado','like','Pendiente')->where('nombre','like',"%$texto%")->paginate($rowperpage);
                    $pedidosotros = Pedido::where('estado','like','Procesado')->orwhere('estado','like','Cancelado')->paginate($rowperpage);
                }
                else
                {
                    $pedidos = Pedido::where('estado','like','Pendiente')->paginate($rowperpage);
                    if($request->get('estado') == "Procesado")
                    {
                        $pedidosotros = Pedido::where('estado','like','Procesado')->paginate($rowperpage);
                    }
                    elseif($request->get('estado') == "Cancelado")
                    {
                        $pedidosotros = Pedido::where('estado','like','Cancelado')->paginate($rowperpage);
                    }
                    else
                    {
                        $pedidosotros = Pedido::where('estado','like','Procesado')->orwhere('estado','like','Cancelado')->paginate($rowperpage);
                    }
                    
                } 

                
                return view('pedidos.list', compact('pedidos','pedidosotros'));
            break;
            case 1:
            $rowperpage = $request->get('rowperpage');


                if ($request->get('texto')) {
                    $texto=trim($request->get('texto'));

                    //$pedidos = Pedido::where('estado',where('poblacion','like',"%$texto%")->paginate($rowperpage);
                    $pedidos = Pedido::where('estado','like','Pendiente')->where('poblacion','like',"%$texto%")->where('provincia','like',"Tarragona")->paginate($rowperpage);
                    $pedidosotros = Pedido::where('estado','like','Procesado')->orwhere('estado','like','Cancelado')->where('provincia','like',"Tarragona")->paginate($rowperpage);
                }
                else
                {
                    $pedidos = Pedido::where('estado','like','Pendiente')->where('provincia','like',"Tarragona")->paginate($rowperpage);
                    $pedidosotros = Pedido::where('estado','like','Procesado')->orwhere('estado','like','Cancelado')->where('provincia','like',"Tarragona")->paginate($rowperpage);
                } 

                
                return view('Catalunya.pedidos.list', compact('pedidos','pedidosotros'));
            break;
            case 2:
            $rowperpage = $request->get('rowperpage');


                if ($request->get('texto')) {
                    $texto=trim($request->get('texto'));

                    $pedidos = Pedido::where('estado','like','Pendiente')->where('poblacion','like',"%$texto%")->where('provincia','like',"Madrid")->paginate($rowperpage);
                    $pedidosotros = Pedido::where('estado','like','Procesado')->orwhere('estado','like','Cancelado')->where('provincia','like',"Madrid")->paginate($rowperpage);
                    
                }
                else
                {
                    $pedidos = Pedido::where('estado','like','Pendiente')->where('provincia','like',"Madrid")->paginate($rowperpage);
                    $pedidosotros = Pedido::where('estado','like','Procesado')->orwhere('estado','like','Cancelado')->where('provincia','like',"Madrid")->paginate($rowperpage);
                } 

                
                return view('Madrid.pedidos.list', compact('pedidos','pedidosotros'));
            break;
            case 3:
            $rowperpage = $request->get('rowperpage');


                if ($request->get('texto')) {
                    $texto=trim($request->get('texto'));

                    $pedidos = Pedido::where('estado','like','Pendiente')->where('poblacion','like',"%$texto%")->where('provincia','like',"Valencia")->paginate($rowperpage);
                    $pedidosotros = Pedido::where('estado','like','Procesado')->orwhere('estado','like','Cancelado')->where('provincia','like',"Valencia")->paginate($rowperpage);
                    
                }
                else
                {
                    $pedidos = Pedido::where('estado','like','Pendiente')->where('provincia','like',"Valencia")->paginate($rowperpage);
                    $pedidosotros = Pedido::where('estado','like','Procesado')->orwhere('estado','like','Cancelado')->where('provincia','like',"Valencia")->paginate($rowperpage);
                } 

                
                return view('pedidos.list', compact('pedidos','pedidosotros'));
            break;
            case 4:
            $rowperpage = $request->get('rowperpage');


                if ($request->get('texto')) {
                    $texto=trim($request->get('texto'));

                    $pedidos = Pedido::where('estado','like','Pendiente')->where('provincia','like',"Tarragona")->orwhere('provincia','like',"Madrid")->where('poblacion','like',"%$texto%")->paginate($rowperpage);
                    $pedidosotros = Pedido::where('estado','like','Pendiente')->where('provincia','like',"Tarragona")->orwhere('provincia','like',"Madrid")->where('poblacion','like',"%$texto%")->paginate($rowperpage);
                    
                }
                else
                {
                    $pedidos = Pedido::where('estado','like','Pendiente')->where('provincia','like',"Tarragona")->orwhere('provincia','like',"Madrid")->paginate($rowperpage);
                    $pedidosotros = Pedido::where('estado','like','Procesado')->orwhere('estado','like','Cancelado')->where('provincia','like',"Tarragona")->orwhere('provincia','like',"Madrid")->paginate($rowperpage);
                } 

                
                return view('pedidos.list', compact('pedidos','pedidosotros'));
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
        return view('pedidos.create');
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
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        return view('pedidos.view',compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        return view('pedidos.edit',compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pedido  $pedido
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
 
 
        $pedido = Pedido::find($id);
        $pedido->id = $request->get('txtId');
        $pedido->nombre= $request->get('txtNombre');
        $pedido->fechaentrada= $request->get('txtFechaentrada');
        $pedido->canal= $request->get('txtCanal');
        //$pedido->tipo = $request->get('txtTipo');
        $pedido->estado = $request->get('txtEstado');
        $pedido->producto = $request->get('txtProducto');
        $pedido->cantidad = $request->get('txtCantidad');
        $pedido->total = $request->get('txtTotal');
        $pedido->seleccionado = $request->get('txtSeleccionado');
 
        $pedido->update();
 
        return redirect('/pedidos')->with('success', 'Pedido actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        $pedido->delete();
        return redirect('/pedidos')->with('success', 'Pedido eliminado correctamente');
    }

   
}
