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



                                        <td>{{link_to_route('projects.show',$task->project->codigo_proyecto, array($task->project->id), array()) }}</td>

                                        <td>{{ link_to_route('tasks.edit', $task->titulo_tarea, array($task) ) }}</td>

                                        @if ($task->fechaentrega_tarea->toDateString() < $fechayesterday)

                                            <td class="text-red">{{$task->fechaentrega_tarea->toDateString()}}</td>
                                        @else
                                            <td>{{$task->fechaentrega_tarea->toDateString()}}</td>
                                        @endif


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

                            {{-- pie boton añadir tarea --}}
                            <div class="box-footer clearfix">
                              <a href="admin/tasks/create" class="btn btn-block btn-success btn-xs pull-left">Nueva tarea</a>
                            </div>

                              <!-- /.box-footer -->

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

                          <td>{{link_to_route('projects.show',$task->project->codigo_proyecto, array($task->project->id), array()) }}</td>
                          <td>{{ link_to_route('tasks.edit', $task->titulo_tarea, array($task) ) }}</td>
                          <td>{{$task->fechaentrega_tarea->toDateString()}}</td>

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

              {{-- pie boton añadir tarea --}}
              <div class="box-footer clearfix">
                <a href="admin/tasks/create" class="btn btn-block btn-success btn-xs pull-left">Nueva tarea</a>
              </div>

                <!-- /.box-footer -->
            </div>








        </div>
