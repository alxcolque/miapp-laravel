@extends('supervisor.layouts.supervisor')

@section('contenido')
<div class="container-fluid">

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('supervisor')}}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Supervisor</li>
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
      <form action="{{route('tiendas.update',$TiendasEdit->id)}}" method="POST" class="tcolor" style="padding: 0px 50px 0px 50px">
      {!!method_field('PUT')!!}
      @csrf    
      <p class="text-center">Actualizar Insumo</p><br>
          <div class="form-group formuswidth">
          <input type="text" class="form-control" name="tienda" value="{{$TiendasEdit->tienda}}" placeholder="Tienda">
          {!!$errors->first('tienda')!!}
          </div>
          <div class="form-group formuswidth">
              <input type="text" class="form-control" name="direccion" value="{{$TiendasEdit->direccion}}" placeholder="Direccion">
          {!!$errors->first('direccion')!!}
          </div>
          <div class="form-group formuswidth">
            <input type="text" class="form-control" name="nit" value="{{$TiendasEdit->nit}}" placeholder="NIT">
            {!!$errors->first('nit')!!}
            </div>
          <div class="btn-block formuswidth">
              <button type="submit" class="flex-row btn btn-primary btn-block btn-flat mt-3">Actualizar</button>
          </div><br>
      </form>
  </div>
</div> <!-- .content -->
@endsection
