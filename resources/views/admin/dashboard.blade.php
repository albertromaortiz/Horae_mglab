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

  @include('admin.includes.box')


        <div class="row">
  @include('admin.includes.tareas')












                {{-- <div class="col-md-6">
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
                <!-- ./col --> --}}


                <div class="col-md-6">
                  <div class="box box">
                    <div class="box-body no-padding">
                      <!-- THE CALENDAR -->
                      <div id="calendar"></div>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /. box -->
                </div>














            </div>
            <!-- /.row (main row) -->








@stop

@section('css')

  <!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href="{{asset("https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.min.css")}}">
  <link rel="stylesheet" href="{{asset("https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.print.css")}}" media="print">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset("vendor/adminlte/plugins/datatables/dataTables.bootstrap.css")}}">

@stop

@section('js')

  <!-- page script -->



  <!-- fullCalendar 2.2.5 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.min.js"></script>

      <script src="{{asset("vendor/adminlte/plugins/fullcalendar/locale/es.js")}}"> </script>









  <!-- DataTables -->
  <script src="{{asset("vendor/adminlte/plugins/datatables/jquery.dataTables.min.js")}}"> </script>
  <script src="{{asset("vendor/adminlte/plugins/datatables/dataTables.bootstrap.min.js")}}"> </script>



<!-- calendario -->

<script>
  $(function () {


    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date();

    $('#calendar').fullCalendar({

      locale: "es",
      nextDayThreshold: '00:00:00',

      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'Hoy',
        month: 'mes',
        week: 'semana',
        day: 'dia'
      },

      //events
      events: [

        @foreach ($tareascalendario as $task)
        {

        title: '{{$task->titulo_tarea}}',
        start: '{{$task->fechainicio_tarea->format('Y-m-d H:i:s')}}',
        end: '{{$task->fechaentrega_tarea->format('Y-m-d H:i:s')}}',
        url: '/admin/tasks/{{$task->id}}/edit',

        @if ($task->estado_tarea == 1)
           backgroundColor: "#f39c12", //
           borderColor: "#f39c12", //red
         @elseif ($task->estado_tarea == 2)
         backgroundColor: "#605ca8 ", //red
         borderColor: "#605ca8 ", //red
            @elseif ($task->estado_tarea == 3)
            backgroundColor: "#00a65a ", //red
            borderColor: "#00a65a ", //red
              @elseif ($task->estado_tarea == 4)
              backgroundColor: "#b2d2d1", //red
              borderColor: "#b2d2d1", //red
                @elseif ($task->estado_tarea == 5)
                backgroundColor: "#0073b7", //red
                borderColor: "#0073b7", //red
                  @elseif ($task->estado_tarea == 6)
                  backgroundColor: "#dd4b39", //red
                  borderColor: "#dd4b39", //red
        @endif

    

        allDay: false,
       },
        @endforeach






        // {
        //   title: 'Long Event',
        //   start: new Date(y, m, d - 5),
        //   end: new Date(y, m, d - 2),
        //   backgroundColor: "#f39c12", //yellow
        //   borderColor: "#f39c12" //yellow
        // },
        // {
        //   title: 'Meeting',
        //   start: new Date(y, m, d, 10, 30),
        //   allDay: false,
        //   backgroundColor: "#0073b7", //Blue
        //   borderColor: "#0073b7" //Blue
        // },
        // {
        //   title: 'Lunch',
        //   start: new Date(y, m, d, 12, 0),
        //   end: new Date(y, m, d, 14, 0),
        //   allDay: false,
        //   backgroundColor: "#00c0ef", //Info (aqua)
        //   borderColor: "#00c0ef" //Info (aqua)
        // },
        // {
        //   title: 'Birthday Party',
        //   start: new Date(y, m, d + 1, 19, 0),
        //   end: new Date(y, m, d + 1, 22, 30),
        //   allDay: false,
        //   backgroundColor: "#00a65a", //Success (green)
        //   borderColor: "#00a65a" //Success (green)
        // },
        // {
        //   title: 'Click for Google',
        //   start: new Date(y, m, 28),
        //   end: new Date(y, m, 29),
        //   url: 'http://google.com/',
        //   backgroundColor: "#3c8dbc", //Primary (light-blue)
        //   borderColor: "#3c8dbc" //Primary (light-blue)
        // }
      ],

      editable: false,
      droppable: false, // this allows things to be dropped onto the calendar !!!
      drop: function (date, allDay) { // this function is called when something is dropped

        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject');

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject);

        // assign it the date that was reported
        copiedEventObject.start = date;
        copiedEventObject.allDay = date;
        copiedEventObject.backgroundColor = $(this).css("background-color");
        copiedEventObject.borderColor = $(this).css("border-color");

        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove();
        }

      }
    });

    /* ADDING EVENTS */
    var currColor = "#3c8dbc"; //Red by default
    //Color chooser button
    var colorChooser = $("#color-chooser-btn");
    $("#color-chooser > li > a").click(function (e) {
      e.preventDefault();
      //Save color
      currColor = $(this).css("color");
      //Add color effect to button
      $('#add-new-event').css({"background-color": currColor, "border-color": currColor});
    });
    $("#add-new-event").click(function (e) {
      e.preventDefault();
      //Get value and make sure it is not null
      var val = $("#new-event").val();
      if (val.length == 0) {
        return;
      }

      //Create events
      var event = $("<div />");
      event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("external-event");
      event.html(val);
      $('#external-events').prepend(event);

      //Add draggable funtionality
      ini_events(event);

      //Remove event from text input
      $("#new-event").val("");
    });
  });
</script>




<!-- fin calendario-->



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
