@extends('adminlte::page')

@section('content_header')
  <h1>
    Listado
    <small>Usuarios</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="btn btn-block btn-success btn-xs"></i> Home</a></li>
    <li class="active">Usuarios</li>
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
              <th>Rendering engine</th>
              <th>Browser</th>
              <th>Platform(s)</th>
              <th>Engine version</th>
              <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 4.0
              </td>
              <td>Win 95+</td>
              <td> 4</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 5.0
              </td>
              <td>Win 95+</td>
              <td>5</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 5.5
              </td>
              <td>Win 95+</td>
              <td>5.5</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 6
              </td>
              <td>Win 98+</td>
              <td>6</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>Internet Explorer 7</td>
              <td>Win XP SP2+</td>
              <td>7</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>AOL browser (AOL desktop)</td>
              <td>Win XP</td>
              <td>6</td>
            <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Firefox 1.0</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.7</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Firefox 1.5</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.8</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Firefox 2.0</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.8</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Firefox 3.0</td>
              <td>Win 2k+ / OSX.3+</td>
              <td>1.9</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Camino 1.0</td>
              <td>OSX.2+</td>
              <td>1.8</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Camino 1.5</td>
              <td>OSX.3+</td>
              <td>1.8</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Netscape 7.2</td>
              <td>Win 95+ / Mac OS 8.6-9.2</td>
              <td>1.7</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Netscape Browser 8</td>
              <td>Win 98SE+</td>
              <td>1.7</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Netscape Navigator 9</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.8</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.0</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.1</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1.1</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.2</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1.2</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.3</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1.3</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.4</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1.4</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.5</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1.5</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.6</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1.6</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.7</td>
              <td>Win 98+ / OSX.1+</td>
              <td>1.7</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Mozilla 1.8</td>
              <td>Win 98+ / OSX.1+</td>
              <td>1.8</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Seamonkey 1.1</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.8</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Gecko</td>
              <td>Epiphany 2.20</td>
              <td>Gnome</td>
              <td>1.8</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Webkit</td>
              <td>Safari 1.2</td>
              <td>OSX.3</td>
              <td>125.5</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Webkit</td>
              <td>Safari 1.3</td>
              <td>OSX.3</td>
              <td>312.8</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Webkit</td>
              <td>Safari 2.0</td>
              <td>OSX.4+</td>
              <td>419.3</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Webkit</td>
              <td>Safari 3.0</td>
              <td>OSX.4+</td>
              <td>522.1</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Webkit</td>
              <td>OmniWeb 5.5</td>
              <td>OSX.4+</td>
              <td>420</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Webkit</td>
              <td>iPod Touch / iPhone</td>
              <td>iPod</td>
              <td>420.1</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Webkit</td>
              <td>S60</td>
              <td>S60</td>
              <td>413</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Opera 7.0</td>
              <td>Win 95+ / OSX.1+</td>
              <td>-</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Opera 7.5</td>
              <td>Win 95+ / OSX.2+</td>
              <td>-</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Opera 8.0</td>
              <td>Win 95+ / OSX.2+</td>
              <td>-</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Opera 8.5</td>
              <td>Win 95+ / OSX.2+</td>
              <td>-</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Opera 9.0</td>
              <td>Win 95+ / OSX.3+</td>
              <td>-</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Opera 9.2</td>
              <td>Win 88+ / OSX.3+</td>
              <td>-</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Opera 9.5</td>
              <td>Win 88+ / OSX.3+</td>
              <td>-</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Opera for Wii</td>
              <td>Wii</td>
              <td>-</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Nokia N800</td>
              <td>N800</td>
              <td>-</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Presto</td>
              <td>Nintendo DS browser</td>
              <td>Nintendo DS</td>
              <td>8.5</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>KHTML</td>
              <td>Konqureror 3.1</td>
              <td>KDE 3.1</td>
              <td>3.1</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>KHTML</td>
              <td>Konqureror 3.3</td>
              <td>KDE 3.3</td>
              <td>3.3</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>KHTML</td>
              <td>Konqureror 3.5</td>
              <td>KDE 3.5</td>
              <td>3.5</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Tasman</td>
              <td>Internet Explorer 4.5</td>
              <td>Mac OS 8-9</td>
              <td>-</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Tasman</td>
              <td>Internet Explorer 5.1</td>
              <td>Mac OS 7.6-9</td>
              <td>1</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Tasman</td>
              <td>Internet Explorer 5.2</td>
              <td>Mac OS 8-X</td>
              <td>1</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Misc</td>
              <td>NetFront 3.1</td>
              <td>Embedded devices</td>
              <td>-</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Misc</td>
              <td>NetFront 3.4</td>
              <td>Embedded devices</td>
              <td>-</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Misc</td>
              <td>Dillo 0.8</td>
              <td>Embedded devices</td>
              <td>-</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Misc</td>
              <td>Links</td>
              <td>Text only</td>
              <td>-</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Misc</td>
              <td>Lynx</td>
              <td>Text only</td>
              <td>-</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Misc</td>
              <td>IE Mobile</td>
              <td>Windows Mobile 6</td>
              <td>-</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Misc</td>
              <td>PSP browser</td>
              <td>PSP</td>
              <td>-</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
            <tr>
              <td>Other browsers</td>
              <td>All others</td>
              <td>-</td>
              <td>-</td>
              <td><button type="button" class="btn btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn btn-danger btn-xs">Eliminar</button></td>
            </tr>
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
