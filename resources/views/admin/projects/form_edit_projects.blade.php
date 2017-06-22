@extends('adminlte::page')

@section('content_header')
  <h1>
    Editar
    <small>Proyectos</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Proyectos</li>
  </ol>
@stop

@section('content')
  <div class="row">
    <div class="col-xs-12">
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
