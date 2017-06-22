@extends('adminlte::page')

@section('content_header')
  <h1>
    Insertar
    <small>Tarea</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Tareas</li>
  </ol>
@stop

@section('content')
  <div class="row">
    <div class="col-xs-12">
          <!-- general form elements -->







          @if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
                </div>
    {{-- <div class="aalert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div> --}}
@endif




          <div class="box box-default">

            <!-- /.box-header -->
            <!-- form start -->


            {{ Form::open(array('route' => 'tasks.store','files'=> true )) }}



              <div class="box-body">

                <div class="form-group">

                  {{Form::label('project_id', 'Proyecto')}}

                   {{Form::select('project_id', $projects, $proyectoid, ['class' => 'form-control', 'placeholder'=>'selecciona un proyecto'])}}




                </div>



                <div class="form-group">

                  {{Form::label('user_id', 'Responsable en mg.lab')}}
                  {{Form::select('user_id[]', $users, null, ['class' => 'form-control select2', 'data-placeholder'=>'selecciona un responsable', 'multiple'=>'multiple'])}}

                </div>


                <div class="form-group">

                  {{Form::label('titulo_tarea', 'Nombre de tarea')}}
                  {{Form::text('titulo_tarea', null, ['class' => 'form-control' ,'placeholder' => 'Nombre de tarea'])}}


                </div>

                {{Form::label('fechainicio_tarea', 'Fecha de inicio')}}


                <div class="form-group">

                  <div class="input-group date">

                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>

                    {{Form::text('fechainicio_tarea', null, ['class' => 'form-control pull-right' , 'id' => 'fechainicio_tarea',])}}

                  </div>
                </div>

                <div class="form-group">
                  <label>Hora de inicio:</label>

                  <div class="input-group bootstrap-timepicker timepicker">

                      {{Form::text('horanicio_tarea', null, ['class' => 'form-control input-small' , 'id' => 'horanicio_tarea',])}}

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>



                {{Form::label('fechaentrega_tarea', 'Fecha de entrega')}}


                <div class="form-group">

                  <div class="input-group date">

                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>

                    {{Form::text('fechaentrega_tarea', null, ['class' => 'form-control pull-right' , 'id' => 'fechaentrega_tarea',])}}

                  </div>
                </div>


                <div class="form-group">
                  <label>Hora de entrega:</label>

                  <div class="input-group bootstrap-timepicker timepicker">

                      {{Form::text('horaentrega_tarea', null, ['class' => 'form-control input-small' , 'id' => 'horaentrega_tarea',])}}

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>




                <div class="form-group">

                  {{Form::label('estado_tarea', 'Estado de tarea')}}
                  {{Form::select('estado_tarea',  ['1' => 'En proceso', '2' => 'En espera',  '3' => 'En producción',  '4' => 'Cerrado',  '5' => 'Cliente',  '6' => 'Por hacer'], null, ['class' => 'form-control'])}}

                </div>

                <div class="form-group">

                  {{Form::label('comentario_tarea', 'Comentarios')}}
                  {{Form::textarea('comentario_tarea', null, ['class' => 'form-control' ,'placeholder' => 'Comentários sobre el tarea'])}}

                </div>

                  {{Form::hidden('role_id', Auth::user()->role_id)}}
                  {{Form::hidden('previous', URL::previous())}}



              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-default">Insertar</button>
              </div>

            {!! Form::close() !!}

          </div>
          <!-- /.box -->
        </div>
      </div>


@endsection

@section('css')

  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{asset('vendor/adminlte/plugins/datepicker/datepicker3.css')}}">

  <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{asset('vendor/adminlte/plugins/timepicker/bootstrap-timepicker.min.css')}}">






@stop

@section('js')

  <!-- Select2 -->
  <script src="{{asset('vendor/adminlte/plugins/select2/select2.full.min.js')}}"></script>


<!-- bootstrap datepicker -->
<script src="{{asset('vendor/adminlte/plugins/datepicker/bootstrap-datepicker.js')}}"></script>

<!-- bootstrap time picker -->
<script src="{{asset('vendor/adminlte/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>


<!-- Languaje -->
   <script src="{{asset('vendor/adminlte/plugins/datepicker/locales/bootstrap-datepicker.min.js')}}"></script>

   <script>
     $(function () {
       //Initialize Select2 Elements
       $(".select2").select2();
     });
   </script>


<script type="text/javascript">



//Date picker
$('#fechainicio_tarea').datepicker({
  autoclose: true,
  todayHighlight :true,
  weekStart : 1,
  language: 'es',
  format: "yyyy-mm-dd",
});

$('#fechaentrega_tarea').datepicker({
  autoclose: true,
  todayHighlight :true,
  weekStart : 1,
  language: 'es',
  format: "yyyy-mm-dd",
});




</script>



<script type="text/javascript">
//timepicker
          $('#horanicio_tarea').timepicker(
            {
            showMeridian: false,
             showSeconds: true,
             defaultTime: '08:00:00',
              }
          );

          $('#horaentrega_tarea').timepicker(
            {
            showMeridian: false,
             showSeconds: true,
             defaultTime: '08:00:00',
              }
          );



      </script>



@stop
