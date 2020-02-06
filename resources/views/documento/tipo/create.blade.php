@extends('layouts.app')
@section('contenido')
<div class="container-fluid">

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">{{ Auth::user()->name }} </li>
  </ol>



    <!--/.col-->
    <div class="d-flex flex-column mb-5 p-1 align-items-center">
        <form action="{{route('tipos.store')}}" method="POST" class="tcolor" style="padding: 0px 50px 0px 50px">
        @csrf    
        <p class="text-center">Registrar Clasificacion de documento</p><br>
            <div class="form-group formuswidth">
            <input type="text" class="form-control" name="descripcion" value="{{old('descripcion')}}" placeholder="Descripcion">
            {!!$errors->first('descripcion')!!}
            </div>
            <div class="btn-block formuswidth">
                <button type="submit" class="flex-row btn btn-primary btn-block btn-flat mt-3">Registrar</button>
            </div><br>
        </form>
    </div>
    <!--/.col-->
</div> <!-- .content -->
@endsection
