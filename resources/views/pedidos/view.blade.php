@extends('layouts.appfaq2')
@section('title', 'SimonGrup')
@section('content')

<div class="container pt-2 pb-13">         
        <div class="row border pt-2">
             
            
                <h2 class="text-center"><b>Este es tu pedido {{auth()->user()->name}}</b></h2>
                <div class="row pt-2">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10 ocultar-div">
                        <small><table class="table table-bordered table-striped table-hover clientes table-responsive">
                            <tr>
                                <th>Nombre</th>
                                <th>DNI</th>
                                <th>Dirección</th>
                                <th>Localidad</th>
                                <th>Provincia</th>
                                <th>Código Postal</th>
                                <th>F. de creación</th>
                                <th>Estado</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Preciol</th>
                                <th>Total</th>
                            </tr> 
                            <tr>
                                <td>{{$pedidos->nombre}}</td>
                                <td>{{$pedidos->dni}}</td>
                                <td>{{$pedidos->address}}</td>
                                <td>{{$pedidos->poblacion}}</td>
                                <td>{{$pedidos->provincia}}</td>
                                <td>{{$pedidos->CP}}</td>
                                <td>{{$pedidos->fechaentrada}}</td>
                                @if($pedidos->estado == 'Pendiente')
                                        <td class="text-warning" >{{$pedidos->estado}}</td>
                                @elseif($pedidos->estado == 'Confirmado')
                                        <td class="text-success" style="margin-top:0px;">{{$pedidos->estado}}</td>
                                @endif
                                
                                <td >{{$pedidos->producto}}</td>
                                <td>{{$pedidos->cantidad}} Lts.</td>
                                <td>{{$pedidos->preciol}}€/l</td>
                                @if($pedidos->totalfinan !== 0)
                                    <td>{{$pedidos->total}}€</td>
                                @else
                                    <td>{{$pedidos->totalfinan}}€</td>
                                @endif
                            </tr> 
                            
                            
                       </table></small>
                       
                       
                    </div>
                    <div class="col-sm-10 ocultar-div-tab ocultar-div-desk">
                        <small><table class="table table-hover clientes table-responsive">
                            <tr class="col-xs-6">
                                <th>Nombre</th>
                                <th>DNI</th>
                                <th>Dirección</th>
                                <th>Localidad</th>
                                <th>Provincia</th>
                                <th>Código Postal</th>
                                <th>F. de creación</th>
                                <th>Estado</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Preciol</th>
                                <th>Total</th>
                            </tr> 
                            <tr class="col-xs-6">
                                <td class="ohnemargin">{{$pedidos->nombre}}</td>
                                <td class="ohnemargin">{{$pedidos->dni}}</td>
                                <td class="ohnemargin">{{$pedidos->address}}</td>
                                <td class="ohnemargin">{{$pedidos->poblacion}}</td>
                                <td class="ohnemargin">{{$pedidos->provincia}}</td>
                                <td class="ohnemargin">{{$pedidos->CP}}</td>
                                <td class="ohnemargin">{{$pedidos->fechaentrada}}</td>
                                @if($pedidos->estado == 'Pendiente')
                                        <td class="text-warning ohnemargin" >{{$pedidos->estado}}</td>
                                @elseif($pedidos->estado == 'Confirmado')
                                        <td class="text-success ohnemargin" style="margin-top:0px;">{{$pedidos->estado}}</td>
                                @endif
                                
                                <td class="ohnemargin">{{$pedidos->producto}}</td>
                                <td class="ohnemargin">{{$pedidos->cantidad}} Lts.</td>
                                <td class="ohnemargin">{{$pedidos->preciol}}€/l</td>
                                @if($pedidos->totalfinan !== 0)
                                    <td class="ohnemargin">{{$pedidos->total}}€  </td>
                                @else
                                    <td class="ohnemargin">{{$pedidos->total}}*3 €</td> 
                                @endif
                            </tr> 
                            
                       </table></small>
                       
                    </div>
                     @if($pedidos->financiado == 1)
                     
                     <div class="col-xs-6 col-sm-9 ocultar-div ml-9">
                         <small><table class="table table-bordered table-striped table-hover clientes">
                            <tr>
                                <th>Financiado</th>
                                <th>Meses</th>
                                <th>Cuotas</th>
                            </tr> 
                            <tr>
                                <td>Sí</td>
                                <td>{{$pedidos->meses}}</td>
                                <td>{{$pedidos->cuotas}} €</td>
                            </tr> 
                       </table></small>
                       </div>
                      <div class="col-sm-10 ocultar-div-tab ocultar-div-desk">
                        <small><table class="table table-hover clientes table-responsive">
                            <tr class="col-xs-6">
                                <th>Financiado</th>
                                <th>Meses</th>
                                <th>Cuotas</th>
                                
                            </tr> 
                            <tr class="col-xs-6">
                                <td class="ohnemargin">Sí</td>
                                <td class="ohnemargin">{{$pedidos->meses}}</td>
                                <td class="ohnemargin">{{$pedidos->cuotas}} €</td>
                            </tr> 
                       </table></small>
                       </div>
                       @endif
                        
                        <!--<div class="row pt-2 pb-1 text-center">
                            <img src="images/googleplay.png">
                            <img src="images/apple.png">
                       </div>  -->
                       <div class="row ml-7">
                           @if(!isset($pedidos->observaciones))
                           
                           @else
                           
                            <p>Observaciones: <input type="text" placeholder="{{$pedidos->observaciones}}" readonly="true"></p>
                           
                           @endif
                           
                       </div>
                </div>
                <div class="row pt-1 pb-2 text-center">
                        <button type="submit" class="btn buttoncons"><a href="bienvenido" style="color:white">Volver a inicio</a></button>
                </div>
        </div>
</div>
@endsection