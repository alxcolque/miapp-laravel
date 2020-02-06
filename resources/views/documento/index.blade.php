@extends('layouts.app')

@section('contenido')
<div class="container-fluid">

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('documentos.index')}}">Dashboard</a>
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
    <div class="col-sm-12">
      <a href="{{route('documentos.create')}}" class=""><button class="btn btn-block btn-primary btn-xs mb-2 mr-2" style="width: 100px">Agregar</button></a>
    </div>
    <!--/.col-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i>
        Listado de Documentos</div>
      <div class="card-body">
        <div class="table-responsive">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
              <thead><tr class="text-black text-center">
                <th>ID</th>
                <th>Documentos</th>
                <th>Descripcion</th>
                <th>Fecha</th>
                <th>url</th>
                <th>Tipo</th>
                <th>Usuario</th>
                <th>Accion</th>
              </tr></thead>
              <tbody>
              @foreach ($InsStockInf as $r)
                      <tr>
                      <td>{{$r->nombre}}</td>
                      <td>{{$r->descripcion}}</td>
                      <td>{{$r->fecha_alta}}</td>
                      <td>{{$r->url}}</td>
                      <td>{{$r->FInsDocumento_ToTipo->nombre}}</td>
                      <td>{{$r->FInsDocumento_ToUsuario->nombre}}</td>
                      <td>
                        <div class="float-left">
                        <a href="{{route('documentos.edit',$r->id)}}"><i class="btn btn-block btn-secondary fa fa-edit"></i></a>
                            <form  action="{{route('documentos.destroy',$r->id)}}" method="POST">
                              {!!method_field('DELETE')!!}
                              @csrf
                              <a><button class="btn btn-block btn-danger btn fa fa-trash"></button></a>
                            </form>
                          </div>
                        </td>
                      </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
</div> <!-- .content -->
@endsection
