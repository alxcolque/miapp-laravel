@extends('supervisor.layouts.supervisor')

@section('contenido')
<div class="container-fluid">

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('supervisor')}}">Dashboard</a>
    </li>
  </ol>
    <!--/.col-->
    <div class="d-flex justify-content-center">
      <div class="card w-75" style="border-color: rgba(0, 0, 0, 0.5)">
        <div class="card-header">
          <p class="text-dark text-center">Perfil de Usuario</p>
        </div>			
        <div class="card-body">
          <h3 class="card-title text-center">Informacion</h3>
          @if($usuario->rol_id === 1)
            <p class="card-title text-dark"><b>Rol:</b> Cliente</p>
          @endif
          @if($usuario->rol_id === 2)
            <p class="card-title text-dark"><b>Rol:</b> Cajero</p>
          @endif
          @if($usuario->rol_id === 3)
            <p class="card-title text-dark"><b>Rol:</b> Recepcion</p>
          @endif
          @if($usuario->rol_id === 4)
            <p class="card-title text-dark"><b>Rol:</b> Elaborador</p>
          @endif
          @if($usuario->rol_id === 5)
            <p class="card-title text-dark"><b>Rol:</b> Supervisor</p>
          @endif
          <p class="card-text text-dark"><b>Nombre:</b> {{$usuario->name}}</p>
          <p class="card-text text-dark"><b>Apellido:</b> {{$usuario->lastname}}</p>
          <p class="card-text text-dark"><b>Email:</b> {{$usuario->email}}</p>
          <br>
          <!--<p class="card-text">Esta es la persona que esta en la parte superios</p>
          <a href="#" class="btn btn-danger">Inhabilitar Usuario</a>
          <a href="#" class="btn btn-primary">Habilitar Usuario</a>-->
        </div>
        <div class="card-footer">
                    <h3 class="text-dark text-center">Fecha de Inscripcion</h3>
                    <p class="text-dark text-center">{{$usuario->created_at}}</p>
        </div>
      </div>
    </div>
    
</div> <!-- .content -->
@endsection
