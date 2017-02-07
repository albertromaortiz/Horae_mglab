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
          <div class="box box-default">

            <!-- /.box-header -->
            <!-- form start -->


            {{ Form::open(array('route' => 'tasks.store','files'=> true )) }}



              <div class="box-body">

                <div class="form-group">

                  {{Form::label('project_id', 'Proyecto')}}
                  {{Form::select('project_id', $projects, null, ['class' => 'form-control', 'placeholder'=>'selecciona un proyecto'])}}

                </div>



                <div class="form-group">

                  {{Form::label('user_id', 'Responsable en mg.lab')}}
                  {{Form::select('user_id[]', $users, null, ['class' => 'form-control select2', 'data-placeholder'=>'selecciona un responsable', 'multiple'=>'multiple'])}}

                </div>


                <div class="form-group">

                  {{Form::label('titulo_tarea', 'Nombre de tarea')}}
                  {{Form::text('titulo_tarea', null, ['class' => 'form-control' ,'placeholder' => 'Nombre de tarea'])}}


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

                  {{Form::label('estado_tarea', 'Estado de tarea')}}
                  {{Form::select('estado_tarea',  ['1' => 'En proceso', '2' => 'En espera',  '3' => 'En producción',  '4' => 'Cerrado'], null, ['class' => 'form-control'])}}

                </div>

                <div class="form-group">

                  {{Form::label('comentario_tarea', 'Comentarios')}}
                  {{Form::textarea('comentario_tarea', null, ['class' => 'form-control' ,'placeholder' => 'Comentários sobre el tarea'])}}

                </div>




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





@stop

@section('js')

  <!-- Select2 -->
  <script src="{{asset('vendor/adminlte/plugins/select2/select2.full.min.js')}}"></script>


<!-- bootstrap datepicker -->
<script src="{{asset('vendor/adminlte/plugins/datepicker/bootstrap-datepicker.js')}}"></script>

<!-- Languaje -->
   <script src="{{asset('vendor/adminlte/plugins/datepicker/locales/bootstrap-datepicker.es.js')}}"></script>

   <script>
     $(function () {
       //Initialize Select2 Elements
       $(".select2").select2();
     });
   </script>


<script type="text/javascript">



//Date picker
$('#fechaentrega_tarea').datepicker({
  autoclose: true,
  language: 'es',
  format: "yy-mm-dd",
});

</script>



@stop
