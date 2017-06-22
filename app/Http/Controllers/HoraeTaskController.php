<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;
use App\User;
use Carbon\Carbon;
use users;
use Auth;
use Redirect;

use Illuminate\Http\Request;
use Illuminate\Support\Str as Str;

class HoraeTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $tasks = Task::where('role_id','=',Auth::user()->role_id)->where('estado_tarea','!=',4)->get();
          return view('admin.tasks.list_tasks', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $proyectoid = 'null';
      $projects = Project::where('role_id','=',Auth::user()->role_id)->orderBy('id', 'desc')->where('estado_proyecto','!=',4)->pluck( 'codigo_proyecto', 'id');
      $users = User::where('role_id','=',Auth::user()->role_id)->orderBy('name', 'asc')->pluck( 'name', 'id');

      return view('admin.tasks.form_ins_tasks', compact('projects', 'users', 'proyectoid'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


     public function create_WhithProject($project)
     {
       $proyectoid = $project;
       $projects = Project::where('role_id','=',Auth::user()->role_id)->orderBy('id', 'desc')->where('estado_proyecto','!=',4)->pluck( 'codigo_proyecto', 'id');
       $users = User::where('role_id','=',Auth::user()->role_id)->orderBy('name', 'asc')->pluck( 'name', 'id');

       return view('admin.tasks.form_ins_tasks', compact('projects', 'users', 'proyectoid'));
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
    public function store(Request $request)
    {

      // validaciones
      $this->validate($request, [
        'titulo_tarea' => 'required',
        'fechaentrega_tarea' => 'required',
      ]);
      $previousurl = $request->previous;
      $task = new task;

      $task->project_id = $request->project_id;
      $task->titulo_tarea = $request->titulo_tarea;
      $task->fechaentrega_tarea = ($request->fechaentrega_tarea.$request->horaentrega_tarea);
      $task->fechainicio_tarea = ($request->fechainicio_tarea.$request->horanicio_tarea);
      $task->comentario_tarea = $request->comentario_tarea;
      $task->estado_tarea = $request->estado_tarea;

      $CodigoProyectoSeleccionado = Project::where('id', $request->project_id)->first();

      $task->role_id = $request->role_id;

      $task->slug = Str::slug($CodigoProyectoSeleccionado->codigo_proyecto . '_' .$request->titulo_tarea);


      $task->save();

      $task->users()->attach($request->input('user_id'));

      return redirect($previousurl);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
      $projects = Project::where('role_id','=',Auth::user()->role_id)->orderBy('id', 'desc')->where('estado_proyecto','!=',4)->pluck( 'codigo_proyecto', 'id');
      $users = User::where('role_id','=',Auth::user()->role_id)->orderBy('name', 'asc')->pluck( 'name', 'id');
     $myusers = $task->users->pluck('id')->ToArray();
     $fechatareaoriginalinicio = $task->fechainicio_tarea->toDateString();
     $fechatareaoriginalentrega = $task->fechaentrega_tarea->toDateString();
     $horatareaoriginalinicio = $task->fechainicio_tarea->toTimeString();
     $horatareaoriginalentrega = $task->fechaentrega_tarea->toTimeString();



      return view('admin.tasks.form_edit_tasks', compact('projects', 'users', 'myusers', 'fechatareaoriginalinicio', 'fechatareaoriginalentrega', 'horatareaoriginalinicio', 'horatareaoriginalentrega'))->withTask($task);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
      $previousurl = $request->previous;

      $task->project_id = $request->project_id;
      $task->titulo_tarea = $request->titulo_tarea;
      $task->fechaentrega_tarea = ($request->fechaentrega_tarea.$request->horaentrega_tarea);
      $task->fechainicio_tarea = ($request->fechainicio_tarea.$request->horanicio_tarea);
      $task->estado_tarea = $request->estado_tarea;
      $task->comentario_tarea = $request->comentario_tarea;

      $CodigoProyectoSeleccionado = Project::where('id', $request->project_id)->first();

      $task->slug = Str::slug($CodigoProyectoSeleccionado->codigo_proyecto . '_' .$request->titulo_tarea);
      $task->save();

      $task->users()->sync($request->input('user_id'));


      return redirect($previousurl);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Task $task)
    {
      $previousurl = $request->previous;
      $task->delete();
      return redirect($previousurl);
    }
}
