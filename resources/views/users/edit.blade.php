@extends('supervisor.layouts.supervisor')

@section('contenido')
<div class="container-fluid">

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('supervisor')}}">Dashboard</a>
    </li>
  </ol>
    <!--/.col-->
    <form action="{{route('users.update',$UsuarioEdit->id)}}" method="POST" class="tcolor" style="padding: 0px 50px 0px 50px">
    {!!method_field('PUT')!!}
    @csrf
    <div class="d-flex justify-content-center">
      <div class="card w-75" style="border-color: rgba(0, 0, 0, 0.5)">
        <div class="card-header">
          <p class="text-dark text-center">Ajustes de Usuario</p>
        </div>	
        <div class="card-body">
          <h3 class="card-title text-center">Informacion</h3>
          <div class="form-group">
            <input type="text" class="form-control" name="name" value="{{$UsuarioEdit->name}}" placeholder="Nombre">
            {!!$errors->first('name')!!}
            </div>
          <div class="form-group">
            <input type="text" class="form-control" name="lastname" value="{{$UsuarioEdit->lastname}}" placeholder="Apellido">
          {!!$errors->first('lastname')!!}
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="email" value="{{$UsuarioEdit->email}}" placeholder="Email">
          {!!$errors->first('email')!!}
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" value="" placeholder="Password">
          {!!$errors->first('password')!!}
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
