@extends('adminlte::page')

@section('content_header')
  <h1>
    Listado
    <small>Histórico de tareas</small>
  </h1>
    <h2><a href= /admin/tasks/create class="btn btn-block btn-success btn-xs"><i class="fa fa-plus"></i> Añadir </a></h2>

  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Tareas</li>
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
              <th>Codigo Proyecto</th>
              <th>Tarea</th>
              <th>Fecha límite</th>
              <th>Responsable's</th>
              <th>Estado</th>
              <th>Acciones</th>
            </tr>
            </thead>
            <tbody>

@foreach ($tasks as $task)

  <tr>
    <td>{{$task->project->codigo_proyecto}}</td>
    <td>{{$task->titulo_tarea}}</td>
    <td>{{$task->fechaentrega_tarea->toDateString()}}




    </td>
      <td>
        @foreach ($task->users as $taski)
          {{$taski->name}}
        @endforeach

</td>

@if ($task->estado_tarea == 1)
   <td><small class="label bg-yellow">En proceso</small></td>
 @elseif ($task->estado_tarea == 2)
      <td><small class="label bg-purple">En espera</small></td>
    @elseif ($task->estado_tarea == 3)
        <td><small class="label bg-green">En producción</small></td>
      @elseif ($task->estado_tarea == 4)
          <td><small class="label bg-gray">Cerrado</small></td>
        @elseif ($task->estado_tarea == 5)
            <td><small class="label bg-blue">Cliente</small></td>
          @elseif ($task->estado_tarea == 6)
              <td><small class="label bg-red">Por hacer</small></td>
@endif
    <td>{{ link_to_route('tasks.edit', 'Editar', array($task), array('class' => 'btn btn btn-warning btn-xs')) }}
        {{ Form::open(array('method'=> 'DELETE', 'route' => array('tasks.destroy', $task),'style'=>'display:inline')) }}
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
        "pageLength": 50,
        "displayLength": 50,




      });
    });
  </script>
@stop
