 @extends('adminlte::page')

@section('title', 'Horae | Dashboard')

@section('content_header')
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
@stop

@section('content')

  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{ $users->count() }}</h3>

          <p>Usuarios</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-stalker"></i>
        </div>
        <a href="/admin/users" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-purple">
        <div class="inner">
          <h3>{{ $customers->count() }}</h3>

          <p>Clientes</p>
        </div>
        <div class="icon">
          <i class="ion ion-android-locate"></i>
        </div>
        <a href="/admin/customers" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-orange">
        <div class="inner">
          <h3>{{ $projects->count() }}</h3>

          <p>Proyectos
          </p>
        </div>
        <div class="icon">
          <i class="ion ion-folder"></i>
        </div>
        <a href="admin/projects" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{ $tasks->count() }}</h3>

          <p>Tareas</p>
        </div>
        <div class="icon">
          <i class="ion ion-clipboard"></i>
        </div>
        <a href="admin/tasks" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>


    <!-- ./col -->

  </div>
  <!-- /.row -->


        <div class="row">
  <div class="col-md-6">


              <div class="box box">
                              <div class="box-header" style="background-color:#F2F2F2">
                                <h3 class="box-title">Mis tareas para esta semana</h3>

                                <div class="box-tools pull-right">
                                  <span data-toggle="tooltip" title="" class="badge bg-grey" data-original-title="{{ $tareassemana->count() }} Tareas">{{ $tareassemana->count() }}</span>
                                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                  </button>
                                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                  </button>
                                </div>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body" style="display: block;">


                                <div class="box-body">
                                  <div class="table-responsive">
                                    <table class="table no-margin">
                                      <thead>
                                      <tr>
                                        <th>Proyecto</th>
                                        <th>Tarea</th>
                                        <th>Fecha</th>
                                        <th>Estado</th>
                                      </tr>
                                      </thead>
                                      <tbody>



                                      @foreach ($yo->tasks()->where('fechaentrega_tarea','<=', $estasemana)->where('estado_tarea','!=',4)->orderBy('fechaentrega_tarea', 'asc')->get() as $task)



                                        <tr>
                                          <td>{{$task->project->codigo_proyecto}}</td>
                                          <td>{{ link_to_route('tasks.edit', $task->titulo_tarea, array($task) ) }}</td>

                                          @if ($task->fechaentrega_tarea->toDateString() < $fechadehoy)

                                              <td class="text-red">{{$task->fechaentrega_tarea->toDateString()}}</td>
                                          @else
                                              <td>{{$task->fechaentrega_tarea->toDateString()}}</td>
                                          @endif

                                          @if ($task->estado_tarea == 1)
                                             <td><small class="label bg-green">En proceso</small></td>
                                           @elseif ($task->estado_tarea == 2)
                                                <td><small class="label bg-orange">En espera</small></td>
                                              @elseif ($task->estado_tarea == 3)
                                                  <td><small class="label bg-purple">En producción</small></td>
                                                @elseif ($task->estado_tarea == 4)
                                                    <td><small class="label bg-red">Cerrado</small></td>
                                                  @elseif ($task->estado_tarea == 5)
                                                      <td><small class="label bg-blue">Cliente</small></td>
                                                    @elseif ($task->estado_tarea == 6)
                                                        <td><small class="label bg-yellow">Por hacer</small></td>
                                          @endif
                                        </tr>

                                        @endforeach


                                      </tbody>
                                    </table>
                                  </div>
                                  <!-- /.table-responsive -->
                                </div>
                                <!-- /.box-body -->



                              </div>
                              <!-- /.box-body -->

                            </div>


{{-- y ahora las tareas que faltan --}}

<div class="box box ">
                <div class="box-header" style="background-color:#F2F2F2">
                  <h3 class="box-title">Más tareas</h3>

                  <div class="box-tools pull-right">
                    <span data-toggle="tooltip" title="" class="badge bg-grey" data-original-title="{{ $tareasparamastarde->count() }} Tareas">{{ $tareasparamastarde->count() }}</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body" style="display: block;">


                  <div class="box-body">
                    <div class="table-responsive">
                      <table class="table no-margin">
                        <thead>
                        <tr>
                          <th>Proyecto</th>
                          <th>Tarea</th>
                          <th>Fecha</th>
                          <th>Estado</th>
                        </tr>
                        </thead>
                        <tbody>



                      @foreach ($yo->tasks()->where('fechaentrega_tarea','>', $estasemana)->where('estado_tarea','!=',4)->orderBy('fechaentrega_tarea', 'asc')->get() as $task)


                          <tr>
                            <td>{{$task->project->codigo_proyecto}}</td>
                            <td>{{ link_to_route('tasks.edit', $task->titulo_tarea, array($task) ) }}</td>
                            <td>{{$task->fechaentrega_tarea->toDateString()}}</td>
                            @if ($task->estado_tarea == 1)
                               <td><small class="label bg-green">En proceso</small></td>
                             @elseif ($task->estado_tarea == 2)
                                  <td><small class="label bg-orange">En espera</small></td>
                                @elseif ($task->estado_tarea == 3)
                                    <td><small class="label bg-purple">En producción</small></td>
                                  @elseif ($task->estado_tarea == 4)
                                      <td><small class="label bg-red">Cerrado</small></td>
                                    @elseif ($task->estado_tarea == 5)
                                        <td><small class="label bg-blue">Cliente</small></td>
                                      @elseif ($task->estado_tarea == 6)
                                          <td><small class="label bg-yellow">Por hacer</small></td>
                            @endif
                          </tr>

                          @endforeach


                        </tbody>
                      </table>
                    </div>
                    <!-- /.table-responsive -->
                  </div>
                  <!-- /.box-body -->



                </div>
                <!-- /.box-body -->

              </div>







{{-- pie boton añadir tarea --}}

              <div class="box-footer clearfix">
                <a href="admin/tasks/create" class="btn btn-sm btn-success btn-flat pull-left">Nueva tarea</a>
              </div>
              <!-- /.box-footer -->

          </div>

                          <div class="col-md-6">
                            <div class="box box">
                                <!-- /.box-header -->
                              <div class="box-body">
                            <h2>{{$fechadehoy->format('l')}}</h2>
                              <h1><strong>{{$fechadehoy->toDateString()}}</strong></h1>

                              </div>
                              <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                          </div>
                          <!-- ./col -->

                <div class="col-md-6">
                  <div class="box box">
                    <div class="box-header with-border">
                      <i class="fa fa-quote-left"></i>

                      <h3 class="box-title">La Frase!</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <blockquote>
                        <p>"He visto caballos vomitar"</p>
                        <small>Autor: <cite title="Source Title">Ralf Thomas</cite></small>
                      </blockquote>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
                <!-- ./col -->











            </div>
            <!-- /.row (main row) -->










@stop
