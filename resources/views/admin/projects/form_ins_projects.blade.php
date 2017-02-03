@extends('adminlte::page')

@section('content_header')
  <h1>
    Insertar
    <small>Proyecto</small>
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
            {!! Form::open(['route' => 'customers.store','files' => true]) !!}



              <div class="box-body">


                <div class="form-group">

                  {{Form::label('codigo_cliente', 'Codigo Cliente')}}
                  {{Form::text('codigo_cliente', null, ['class' => 'form-control' ,'placeholder' => 'XXX'])}}
                  <p class="help-block">Ojo!! tienen que ser tres letras en mayuscula.</p>

                </div>

                <div class="form-group">

                  {{Form::label('nombre_cliente', 'Nombre Cliente')}}
                  {{Form::text('nombre_cliente', null, ['class' => 'form-control' ,'placeholder' => 'Nombre cliente'])}}

                </div>


                <div class="form-group">

                  {{Form::label('email_cliente', 'E-Mail')}}
                  {{Form::email('email_cliente', null, ['class' => 'form-control' ,'placeholder' => 'Email del cliente'])}}

                </div>

                <div class="form-group">

                  {{Form::label('telefono_cliente', 'Teléfono')}}
                  {{Form::text('telefono_cliente', null, ['class' => 'form-control'])}}

                </div>

                <div class="form-group">

                  {{Form::label('contacto_cliente', 'Persona de contacto')}}
                  {{Form::text('contacto_cliente', null, ['class' => 'form-control' ,'placeholder' => 'Persona de contacto'])}}

                </div>



                {{-- <div class="form-group">

                  {{Form::label('logotipo_cliente', 'Logotipo')}}
                  {{Form::file('logotipo_cliente', null, ['class' => 'form-control'])}}
                    <p class="help-block">A ver este logo!</p>
              </div> --}}


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

@stop

@section('js')

@stop
