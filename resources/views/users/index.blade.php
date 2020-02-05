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
    <div class="col-sm-12">
      <a href="{{route('insumos.create')}}" class=""><button class="btn btn-block btn-primary btn-xs mb-2 mr-2" style="width: 100px">Agregar</button></a>
    </div>
    <!--/.col-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i>
        Listado de Usuarios</div>
      <div class="card-body">
        <div class="table-responsive">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
              <thead><tr class="text-black text-center">
                <th>ID</th>
                <th>Nombre Completo</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Accion</th>
              </tr></thead>
              <tbody>
                @foreach ($Usuarios as $Usuario)
                      <tr>
                      <td>{{$Usuario->id}}</td>
                      <td>{{$Usuario->name.' '.$Usuario->lastname}}</td>
                      <td>{{$Usuario->email}}</td>
                      <td>
                        @if($Usuario->rol_id==1)
                          Cliente
                        @elseif($Usuario->rol_id==2) 
                          Cajero
                        @elseif($Usuario->rol_id==3)
                          Recepcion
                        @elseif($Usuario->rol_id==4)
                          Elaborador
                        @elseif($Usuario->rol_id==5)
                          Supervisor
                        @endif
                      </td> 
                      <td>
                        <div class="float-left">
                          <a href="{{route('usersrol.edit',$Usuario->id)}}"><i class="btn btn-block btn-secondary fa fa-edit"></i></a>
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
