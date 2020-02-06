@extends('layouts.app')

@section('contenido')
<div class="container-fluid">

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
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
        <form action="{{route('documentos.store')}}" method="POST" class="tcolor" style="padding: 0px 50px 0px 50px">
        @csrf
        <p class="text-center">Registrar Documentos</p><br>
            <div class="form-group formuswidth">
                <input type="text" class="form-control" name="nombre" placeholder="nombre">
                {!!$errors->first('nombre')!!}
            </div>
            <div class="form-group formuswidth">
                <input type="text" class="form-control" name="descripcion" placeholder="descripcion">
                {!!$errors->first('descripcion')!!}
            </div>
            <div class="form-group formuswidth">
                <input type="text" class="form-control" name="fecha_alta" placeholder="fecha_alta">
                {!!$errors->first('fecha_alta')!!}
            </div>
            <div class="form-group formuswidth">
                <input type="text" class="form-control" name="url" placeholder="url">
                {!!$errors->first('url')!!}
            </div>
            <div>
                <select name="tipo_id" class="form-control text-center formuswidth mt-3">
                    <option hidden value="">Seleccione Tipo</option>
                    @foreach ($InsInf as $r)
                    <option value="{{$r->id}}">{{$r->descripcion}}</option>
                    @endforeach
                </select>
                {!!$errors->first('tipo_id')!!}
            </div>
            <div>
                <select name="usuario_id" class="form-control text-center formuswidth mt-3">
                    <option hidden value="">Seleccione Usuario</option>
                    @foreach ($TieInf as $Tie)
                    <option value="{{$Tie->id}}">{{$Tie->name}}</option>
                    @endforeach
                </select>
                {!!$errors->first('usuario_id')!!}
            </div>
            <div class="btn-block formuswidth">
                <button type="submit" class="flex-row btn btn-primary btn-block btn-flat mt-3">Registrar</button>
            </div><br>
        </form>
    </div>
</div> <!-- .content -->
@endsection
