@extends('adminlte::page')

@section('content_header')
  <h1>
    {{$project->codigo_proyecto}}
    <small>detalle de proyecto</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Proyectos</li>
  </ol>
@stop

@section('content')
  <div class="row">
    <div class="col-xs-6">
          <!-- general form elements -->
          <div class="box box-default">

            <!-- /.box-header -->
            <!-- form start -->
          {{ Form::model($project, ['route' => ['projects.update', $project],'method' => 'PATCH','files' => true ])}}



          <div class="box-body">


            <div class="form-group">

              {{Form::label('customer_id', 'Cliente')}}
              {{Form::select('customer_id', $customers, null, ['class' => 'form-control', 'placeholder'=>'selecciona un cliente'])}}

            </div>

            <div class="form-group">

              {{Form::label('user_id', 'Responsable en mg.lab')}}
              {{Form::select('user_id', $users, null, ['class' => 'form-control', 'placeholder'=>'selecciona un responsable'])}}

            </div>


            <div class="form-group">

              {{Form::label('titulo_proyecto', 'Nombre de Proyecto')}}
              {{Form::text('titulo_proyecto', null, ['class' => 'form-control' ,'placeholder' => 'Nombre de Proyecto'])}}


            </div>



            {{Form::label('fechaentrega_proyecto', 'Fecha de entrega')}}


            <div class="form-group">

              <div class="input-group date">

                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>

                {{Form::text('fechaentrega_proyecto', null, ['class' => 'form-control pull-right' , 'id' => 'fechaentrega_proyecto',])}}

              </div>

            </div>




            <div class="form-group">

              {{Form::label('estado_proyecto', 'Estado de proyecto')}}
              {{Form::select('estado_proyecto',  ['1' => 'En proceso', '2' => 'En espera',  '3' => 'Para Facturar',  '4' => 'Cerrado'], null, ['class' => 'form-control'])}}

            </div>

            <div class="form-group">

              {{Form::label('comentario_proyecto', 'Comentarios')}}
              {{Form::textarea('comentario_proyecto', null, ['class' => 'form-control' ,'placeholder' => 'Comentários sobre el Proyecto'])}}

            </div>




          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-default">Editar</button>
          </div>

                      {!! Form::close() !!}

          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-6">

                  <div class="box box">
                                  <div class="box-header">
                                    <h3 class="box-title">Tareas del proyecto</h3>

                                    <div class="box-tools pull-right">
                                      <span data-toggle="tooltip" title="" class="badge bg-grey" data-original-title="{{$cuentatareas}} Tareas">{{$cuentatareas}}</span>
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
                                            <th>Tarea</th>
                                            <th>Fecha</th>
                                            <th>Responsables</th>
                                            <th>Estado</th>
                                          </tr>
                                          </thead>
                                          <tbody>


                                          @foreach ($project->tasks()->orderBy('fechaentrega_tarea', 'asc')->get() as $task)

                                          <tr>

                                              <td>{{ link_to_route('tasks.edit', $task->titulo_tarea, array($task) ) }}</td>

                                              @if ($task->fechaentrega_tarea->toDateString() < $fechadehoy)

                                                  <td class="text-red">{{$task->fechaentrega_tarea->toDateString()}}</td>
                                              @else
                                                  <td>{{$task->fechaentrega_tarea->toDateString()}}</td>
                                              @endif

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




                                      <div class="box-footer clearfix">

                            {{ link_to_route('create_WhithProject', 'Nueva tarea', array($project->id), array('class' => 'btn btn-block btn-success btn-xs pull-left')) }}


                          </div>






                                    <!-- /.box-footer -->

                                </div>
                              </div>
                    </div>


@endsection

@section('css')

  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{asset('vendor/adminlte/plugins/datepicker/datepicker3.css')}}">



@stop

@section('js')

<!-- bootstrap datepicker -->
<script src="{{asset('vendor/adminlte/plugins/datepicker/bootstrap-datepicker.js')}}"></script>

<!-- Languaje -->
   <script src="{{asset('vendor/adminlte/plugins/datepicker/locales/bootstrap-datepicker.es.js')}}"></script>


<script type="text/javascript">

//Date picker
$('#fechaentrega_proyecto').datepicker({
  autoclose: true,
  todayHighlight :true,
  weekStart : 1,
  language: 'es',
  format: "yyyy-mm-dd",
});

</script>



@stop
