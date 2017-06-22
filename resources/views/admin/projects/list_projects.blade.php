@extends('adminlte::page')

@section('content_header')
  <h1>
    Listado
    <small>Proyectos</small>
  </h1>
    <h2><a href= /admin/projects/create class="btn btn-block btn-success btn-xs"><i class="fa fa-plus"></i> Añadir </a></h2>

  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Proyectos</li>
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
              <th>Fecha entrega</th>
              <th>Responsable</th>
              <th>Estado</th>
              <th>Acciones</th>
            </tr>
            </thead>
            <tbody>

@foreach ($projects as $project)

  <tr>
    <td>{{link_to_route('projects.show',$project->codigo_proyecto, array($project), array()) }} </td>
    <td>{{$project->fechaentrega_proyecto}}</td>
    <td>{{$project->user->name}}</td>

@if ($project->estado_proyecto == 1)
   <td><small class="label bg-yellow">En proceso</small></td>
 @elseif ($project->estado_proyecto == 2)
      <td><small class="label bg-purple">En espera</small></td>
    @elseif ($project->estado_proyecto == 3)
        <td><small class="label bg-black">Para Facturar</small></td>
      @elseif ($project->estado_proyecto == 4)
          <td><small class="label bg-gray">Cerrado</small></td>
@endif
    <td>
        {{ link_to_route('projects.edit', 'Editar', array($project), array('class' => 'btn btn btn-warning btn-xs')) }}
        {{ Form::open(array('method'=> 'DELETE', 'route' => array('projects.destroy', $project),'style'=>'display:inline')) }}
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
    <link rel="stylesheet" href="{{asset("vendor/adminlte/plugins/datatables/extensions/Tabletools/css/dataTables.tableTools.css")}}">




@stop

@section('js')

  <!-- page script -->

  <!-- DataTables -->

  <script src="{{asset("vendor/adminlte/plugins/datatables/jquery.dataTables.min.js")}}"> </script>
  <script src="{{asset("vendor/adminlte/plugins/datatables/dataTables.bootstrap.min.js")}}"> </script>
    <script src="{{asset("vendor/adminlte/plugins/datatables/extensions/Tabletools/js/dataTables.tableTools.js")}}"> </script>



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
        "pageLength": 50,
        "displayLength": 50,

      });
    });






  </script>





@stop
