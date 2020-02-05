@extends('layouts.app')

@section('contenido')
<div class="container-fluid">

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('supervisor')}}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Usuario</li>
  </ol>
    <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
            <span class="badge badge-pill badge-success">{{ Auth::user()->name }} Success</span> You successfully read this important alert message.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <div class="d-flex flex-column mb-5 p-1 align-items-center">
        <form action="{{route('tiendas.store')}}" method="POST" class="tcolor" style="padding: 0px 50px 0px 50px">
        @csrf    
        <p class="text-center">Registrar Documento</p><br>
            <div class="form-group formuswidth">
            <input type="text" class="form-control" name="tienda" placeholder="Tienda">
            <!--{!!$errors->first('tienda')!!}-->
            </div>
            <div class="form-group formuswidth">
                <input type="text" class="form-control" name="direccion" placeholder="Direccion">
            <!--{!!$errors->first('tienda')!!}-->
            </div>
            <div class="form-group formuswidth">
                <input type="text" class="form-control" name="nit" placeholder="NIT">
            <!--{!!$errors->first('tienda')!!}-->
            </div>
            <div class="btn-block formuswidth">
                <button type="submit" class="flex-row btn btn-primary btn-block btn-flat mt-3">Registrar</button>
            </div><br>
        </form>
    </div>
</div> <!-- .content -->
@endsection
