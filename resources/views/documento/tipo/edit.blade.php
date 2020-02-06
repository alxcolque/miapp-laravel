@extends('layouts.app')

@section('contenido')
<div class="container-fluid">

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">{{ Auth::user()->name }}</li>
  </ol>
    
    <div class="d-flex flex-column mb-5 p-1 align-items-center">
      <form action="{{route('tipos.update',$TEdit->id)}}" method="POST" class="tcolor" style="padding: 0px 50px 0px 50px">
        {!!method_field('PUT')!!}
        @csrf 
      <p class="text-center">Editar tipo</p><br>
          <div class="form-group formuswidth">
          <input type="text" class="form-control" name="descripcion" value="{{$TEdit->descripcion}}" placeholder="Descripcion">
          {!!$errors->first('descripcion')!!}
          </div>
          <div class="btn-block formuswidth">
              <button type="submit" class="flex-row btn btn-primary btn-block btn-flat mt-3">Editar</button>
          </div><br>
      </form>
  </div>
</div> <!-- .content -->
@endsection
