@extends('supervisor.layouts.supervisor')

@section('contenido')
<div class="container-fluid">

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('supervisor')}}">Dashboard</a>
    </li>
  </ol>
    <!--/.col-->
    <form action="{{route('usersrol.update',$UsuarioEditRol->id)}}" method="POST" class="tcolor" style="padding: 0px 50px 0px 50px">
    {!!method_field('PUT')!!}
    @csrf
    <div class="d-flex justify-content-center">
      <div class="card w-75" style="border-color: rgba(0, 0, 0, 0.5)">
        <div class="card-header">
          <p class="text-dark text-center">Edicion Rol de Usuario</p>
        </div>	
        <div class="card-body">
          <h3 class="card-title text-center">Seleccione Rol</h3>
          <div>
            <select name="rol_id" class="form-control text-center formuswidth mt-3">
            <option hidden value="{{$UsuarioEditRol->rol_id}}">
              @if($UsuarioEditRol->rol_id==1)
                Cliente
              @elseif($UsuarioEditRol->rol_id==2) 
                Cajero
              @elseif($UsuarioEditRol->rol_id==3)
                Recepcion
              @elseif($UsuarioEditRol->rol_id==4)
                Elaborador
              @elseif($UsuarioEditRol->rol_id==5)
                Supervisor
              @endif
            </option>
                <option value="1">Cliente</option>
                <option value="2">Cajero</option>    
                <option value="3">Recepcion</option>    
                <option value="4">Elaborador</option>    
                <option value="5">Supervisor</option>    
            </select>
            {!!$errors->first('rol_id')!!}
          </div>
        </div>
        <div class="card-footer">
          <div class="btn-block">
            <button type="submit" class="flex-row btn btn-primary btn-block btn-flat mt-3">Guardar Cambios</button>
          </div><br>
        </div>
      </div>
    </div>
    </form>    
</div> <!-- .content -->
@endsection
