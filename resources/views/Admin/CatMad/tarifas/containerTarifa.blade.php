<?php

use App\Tarifa;

$now = Carbon\Carbon::today();
$tarifa0011 = Tarifa::where('rango1', '=',0)->where('idzona','=', 001)->get();
$tarifa0012 = Tarifa::where('rango1', '=',400)->where('idzona','=', 001)->get();
$tarifa0013 = Tarifa::where('rango1', '=',1000)->where('idzona','=', 001)->get();
$tarifa0041 = Tarifa::where('rango1', '=',0)->where('idzona','=', 004)->get();
$tarifa0042 = Tarifa::where('rango1', '=',400)->where('idzona','=', 004)->get();
$tarifa0043 = Tarifa::where('rango1', '=',1000)->where('idzona','=', 004)->get();       
$rowperpage="";
?>
<section class="containerCuenta">
    <section class="tarifaspvp">
        <div class="content">
            <div class="row">
                <div class="col-lg-11">
                        Tarifas PVP
                </div>
                <div class="col-lg-1">
                    <a class="btn btn-primary" href="{{ route('tarifas.create') }}">+ Nuevo</a>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered table-striped table-hover clientes">
                <tr>
                    <th>Producto</th>
                    <th>Fecha de modificación</th>
                    <th>Rango1</th>
                    <th>Rango2</th>
                    <th>Precio</th>
                    <th>Descripción(zona)</th>
                    <th>ID ZONA</th>
                    <th>Zona</th>
                    <th width="180px">Acción</th>
                </tr>
                <tr>
                    <td>{{ $tarifa1->producto }}</td>
                    <td>{{ $tarifa1->fecha_modificacion }}</td>
                    <td>{{ $tarifa1->rango1 }}</td>
                    <td>{{ $tarifa1->rango2 }}</td>
                    <td class="bg-warning">{{ $tarifa1->precio }}</td>
                    <td>{{ $tarifa1->zonadesc }}</td>
                    <td>{{ $tarifa1->idzona }}</td>
                    <td>{{ $tarifa1->zona }}</td>
                    <td>
                        <form action="{{ route('tarifas.destroy',$tarifa1->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('tarifas.show',$tarifa1->id) }}"><i class="fas fa-eye"></i></a>
                            <!-- <a class="btn btn-primary" href="{{ route('tarifas.edit',$tarifa1->id) }}"><i class="fas fa-edit"></i></a>-->
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>{{ $tarifa2->producto }}</td>
                    <td>{{ $tarifa2->fecha_modificacion }}</td>
                    <td>{{ $tarifa2->rango1 }}</td>
                    <td>{{ $tarifa2->rango2 }}</td>
                    <td class="bg-warning">{{ $tarifa2->precio }}</td>
                    <td>{{ $tarifa2->zonadesc }}</td>
                    <td>{{ $tarifa2->idzona }}</td>
                    <td>{{ $tarifa2->zona }}</td>
                    <td>
                        <form action="{{ route('tarifas.destroy',$tarifa2->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('tarifas.show',$tarifa2->id) }}"><i class="fas fa-eye"></i></a>
                            <!--<a class="btn btn-primary" href="{{ route('tarifas.edit',$tarifa2->id) }}"><i class="fas fa-edit"></i></a>-->
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>{{ $tarifa3->producto }}</td>
                    <td>{{ $tarifa3->fecha_modificacion }}</td>
                    <td>{{ $tarifa3->rango1 }}</td>
                    <td>{{ $tarifa3->rango2 }}</td>
                    <td class="bg-warning">{{ $tarifa3->precio }}</td>
                    <td>{{ $tarifa3->zonadesc }}</td>
                    <td>{{ $tarifa3->idzona }}</td>
                    <td>{{ $tarifa3->zona }}</td>
                    <td>
                        <form action="{{ route('tarifas.destroy',$tarifa3->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('tarifas.show',$tarifa3->id) }}"><i class="fas fa-eye"></i></a>
                            <!--<a class="btn btn-primary" href="{{ route('tarifas.edit',$tarifa3->id) }}"><i class="fas fa-edit"></i></a>-->
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>{{ $tarifa4->producto }}</td>
                    <td>{{ $tarifa4->fecha_modificacion }}</td>
                    <td>{{ $tarifa4->rango1 }}</td>
                    <td>{{ $tarifa4->rango2 }}</td>
                    <td class="bg-warning">{{ $tarifa4->precio }}</td>
                    <td>{{ $tarifa4->zonadesc }}</td>
                    <td>{{ $tarifa4->idzona }}</td>
                    <td>{{ $tarifa4->zona }}</td>
                    <td>
                        <form action="{{ route('tarifas.destroy',$tarifa4->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('tarifas.show',$tarifa4->id) }}"><i class="fas fa-eye"></i></a>
                            <!--<a class="btn btn-primary" href="{{ route('tarifas.edit',$tarifa4->id) }}"><i class="fas fa-edit"></i></a>-->
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>{{ $tarifa5->producto }}</td>
                    <td>{{ $tarifa5->fecha_modificacion }}</td>
                    <td>{{ $tarifa5->rango1 }}</td>
                    <td>{{ $tarifa5->rango2 }}</td>
                    <td class="bg-warning">{{ $tarifa5->precio }}</td>
                    <td>{{ $tarifa5->zonadesc }}</td>
                    <td>{{ $tarifa5->idzona }}</td>
                    <td>{{ $tarifa5->zona }}</td>
                    <td>
                        <form action="{{ route('tarifas.destroy',$tarifa5->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('tarifas.show',$tarifa5->id) }}"><i class="fas fa-eye"></i></a>
                            <!--<a class="btn btn-primary" href="{{ route('tarifas.edit',$tarifa5->id) }}"><i class="fas fa-edit"></i></a>-->
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>{{ $tarifa6->producto }}</td>
                    <td>{{ $tarifa6->fecha_modificacion }}</td>
                    <td>{{ $tarifa6->rango1 }}</td>
                    <td>{{ $tarifa6->rango2 }}</td>
                    <td class="bg-warning">{{ $tarifa6->precio }}</td>
                    <td>{{ $tarifa6->zonadesc }}</td>
                    <td>{{ $tarifa6->idzona }}</td>
                    <td>{{ $tarifa6->zona }}</td>
                    <td>
                        <form action="{{ route('tarifas.destroy',$tarifa6->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('tarifas.show',$tarifa6->id) }}"><i class="fas fa-eye"></i></a>
                            <!--<a class="btn btn-primary" href="{{ route('tarifas.edit',$tarifa6->id) }}"><i class="fas fa-edit"></i></a>-->
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </section>
    <section class="separacionTarifas"></section>
    <section class="tarifaspvphistórico">
        <div class="container">
            <div class="row ">
                <div class="col-sm-10 float-left icuenta">
                    <b>Histórico de precios</b>
                </div>
                <div class="col-sm-2 icuenta">
                    <label for="Default select example">Periodo</label>
                    <select class="form-select" aria-label="Default select example">
                      <option value="1">Semana</option>
                      <option value="2">Mes</option>
                      <option value="3">Trimestre</option>
                      <option value="4" selected>Año</option>
                    </select>
                </div>
                
            </div>
        </div>
        <div class="row"></div>       
        <!--<figure class="highcharts-figure">-->
    <div id="container"></div>
    <p class="highcharts-description">        
    </p>
</figure>
    </section>
</section>
<!--Highcharts -->
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>
  <script type="text/javascript">
    Highcharts.chart('container', {
        
        chart: {
            backgroundColor: 'rgba(0,0,0,0)'
        },

        title: {
            text: ''
        },

        subtitle: {
            text: ''
        },
        credits: {
    enabled: false
  },

        yAxis: {
            title: {
                text: ''
            }
        },

        xAxis: {
           labels: { 
           enabled: true 
           },

        },

        legend: {
           enabled:false 
            
        },

        plotOptions: {
            series: {
                label: {
                    connectorAllowed: false
                },
                
            }
        },
        series: [{
            name: 'GOB 0-399 Madrid',
            data: (function() {
                        var data = [];
                    <?php
                        for($i = 0 ;$i<count($tarifa0011);$i++){
                    ?>
                        data.push([<?php echo $tarifa0011[$i]->precio;?>]);
                    <?php } ?>
                return data;
                     })() 
        }, {
            name: 'GOB 400-999 Madrid',
            data: (function() {
                        var data = [];
                    <?php
                        for($i = 0 ;$i<count($tarifa0012);$i++){
                    ?>
                        data.push([<?php echo $tarifa0012[$i]->precio;?>]);
                    <?php } ?>
                return data;
                     })() 
        }, {
            name: 'GOB >1000 Madrid',
            data: (function() {
                        var data = [];
                    <?php
                        for($i = 0 ;$i<count($tarifa0013);$i++){
                    ?>
                        data.push([<?php echo $tarifa0013[$i]->precio;?>]);
                    <?php } ?>
                return data;
                     })() 
        },{
            name: 'GOB 0-399 Catalunya',
            data: (function() {
                        var data = [];
                    <?php
                        for($i = 0 ;$i<count($tarifa0041);$i++){
                    ?>
                        data.push([<?php echo $tarifa0041[$i]->precio;?>]);
                    <?php } ?>
                return data;
                     })()
        }, {
            name: 'GOB 400-999 Catalunya',
            data: (function() {
                        var data = [];
                    <?php
                        for($i = 0 ;$i<count($tarifa0042);$i++){
                    ?>
                        data.push([<?php echo $tarifa0042[$i]->precio;?>]);
                    <?php } ?>
                return data;
                     })() 
        }, {
            name: 'GOB > 1000 Catalunya',
            data: (function() {
                        var data = [];
                    <?php
                        for($i = 0 ;$i<count($tarifa0043);$i++){
                    ?>
                        data.push([<?php echo $tarifa0043[$i]->precio;?>]);
                    <?php } ?>
                return data;
                     })() 
        }],
        exporting: {
            enabled: false
          },

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
  </script>