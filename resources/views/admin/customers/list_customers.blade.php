@extends('adminlte::page')

@section('content_header')
  <h1>
    Listado
    <small>Clientes</small>
  </h1>
    <h2><a href= /admin/customers/create class="btn btn-block btn-success btn-xs"><i class="fa fa-plus"></i> Añadir </a></h2>

  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Clientes</li>
  </ol>
@stop

@section('content')
  <div class="row">
    <div class="col-xs-12">

      <div class="box">

        <!-- /.box-header -->
        <div class="box-body">

          <table id="list" class="table table-bordered table-striped">

            <thead>
            <tr>
              <th>Codigo</th>
              <th>Nombre</th>
              <th>Email</th>
              <th>Teléfono</th>
              <th>Contacto</th>
              <th>Acciones</th>
            </tr>
            </thead>
            <tbody>

@foreach ($customers as $customer)

  <tr>
    <td>{{$customer->codigo_cliente}}</td>
    <td>{{$customer->nombre_cliente}}</td>
    <td>{{$customer->email_cliente}}</td>
    <td>{{$customer->telefono_cliente}}</td>
    <td>{{$customer->contacto_cliente}}</td>
    <td>{{ link_to_route('customers.edit', 'Editar', array($customer), array('class' => 'btn btn btn-warning btn-xs')) }}
        {{ Form::open(array('method'=> 'DELETE', 'route' => array('customers.destroy', $customer),'style'=>'display:inline')) }}
        {{ Form::submit('Eliminar', array('class' => 'btn btn btn-danger btn-xs')) }}
        {{ Form::close() }}

    </td>
  </tr>

@endforeach




        </tbody>

          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

@endsection

@section('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset("vendor/adminlte/plugins/datatables/dataTables.bootstrap.css")}}">

@stop

@section('js')

  <!-- page script -->

  <!-- DataTables -->

  <script src="{{asset("vendor/adminlte/plugins/datatables/jquery.dataTables.min.js")}}"> </script>
  <script src="{{asset("vendor/adminlte/plugins/datatables/dataTables.bootstrap.min.js")}}"> </script>

  <script>
    $(function () {
      $('#list').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "stateSave": true,
        "responsive": true,



      });
    });
  </script>
@stop
