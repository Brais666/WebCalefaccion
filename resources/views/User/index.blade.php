<?php 
  $reduser= $now->format('yy-m-d');
  ?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado de Usuarios-SimonGrup</title>
  <!-- LIBRERIAS BOOTSTRAP-->
    <!-- fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-----------------BootstrapCDN------------------------------>
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- CSS-->
    <link rel="stylesheet" href="css/estilos.css" />
</head>
<body>
<aside>
    
  @include('layouts/menuadmin')
    
</aside>
<section class="container"> 
@include('layouts/logout')  
    <div class="titulo p-3"><h1>{{$title}}</h1></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark w-25" id="breadcrumbhome">
          <li class="breadcrumb-item ml-2" id="breadcrumbhome"><a href="welcome" class="text-light">Home</a></li>
          <li class="breadcrumb-item " id="breadcrumbhome"><a href="welcome" class="text-light">User</a></li>
          <li class="breadcrumb-item active" aria-current="page">Listado Usuarios</li>
        </ol>
    </nav>

     <div>
        <div class="titulo p-3"><h1>Usuarios</h1></div>
        <div >
          <div class="card-body">            
            <div class="table-container">
              <table id="mytable" class="table table-bordred table-striped">
               <thead>
                 <th>Id</th>
                 <th>Nombre</th>
                 <th>Email</th>
                 <th>Nivel</th> 
                 <th>Última conexión</th> 
                 <th>Editar</th>
                 <th>Eliminar</th>               
               </thead>
               <tbody>
                @if($users->count())  
                @foreach($users as $user)  
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>@if($user->admin==0){{'user'}}@else{{'administrador'}}@endif</td>
                    @if($user->last_login == $reduser) <td class="text-success"> @else <td class="text-danger">@endif {{$user->last_login}}</td>
                    <td><a class="btn btn-primary btn-xs" href="{{action('UserController@edit', $user->id)}}" ><i class="fas fa-pencil-alt"></i></a></td>
                    <td>
                      <form action="{{action('UserController@destroy', $user->id)}}" method="post">

                       {{csrf_field()}}
                       <input name="_method" type="hidden" value="DELETE">
     
                       <button class="btn btn-danger btn-xs" type="submit"><i class="fas fa-trash-alt"></i></button>
                     </td>                 
                  </tr>
                @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
                 
               </tbody>

              </table>
           </div>
      
  </section>
  
  <!-- Scripts -->
    <script src="js/app.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
  
  
</body>
</html>