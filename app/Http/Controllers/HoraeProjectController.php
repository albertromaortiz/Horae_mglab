<?php

namespace App\Http\Controllers;

use App\Project;
use App\Customer;
use App\User;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Str as Str;
use Carbon\Carbon;
use Auth;
use DB;

class HoraeProjectController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

    $customers = Customer::all();
    $projects = Project::where('role_id','=',Auth::user()->role_id)->get();
    return view('admin.projects.list_projects', compact('projects', 'customers'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {

    $customers = Customer::select(DB::raw("concat(codigo_cliente, '_',nombre_cliente) as cono_cliente"),'id')->where('role_id','=',Auth::user()->role_id)->orderBy('codigo_cliente', 'asc')->pluck( 'cono_cliente', 'id');

    $users = User::where('role_id','=',Auth::user()->role_id)->orderBy('name', 'asc')->pluck( 'name', 'id');

    return view('admin.projects.form_ins_projects', compact('customers', 'users'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {


    $project = new project;

    $project->customer_id = $request->customer_id;
    $project->user_id = $request->user_id;
    $project->titulo_proyecto = $request->titulo_proyecto;

    $CodigoClienteSeleccionado = Customer::where('id', $request->customer_id)->first();

    $project->codigo_proyecto = $CodigoClienteSeleccionado->codigo_cliente . '_' .$request->titulo_proyecto;
    $project->estado_proyecto = $request->estado_proyecto;
    $project->fechaentrega_proyecto = $request->fechaentrega_proyecto;
    $project->comentario_proyecto = $request->comentario_proyecto;
    $project->role_id = $request->role_id;

    $project->slug = Str::slug($CodigoClienteSeleccionado->codigo_cliente . '_' .$request->titulo_proyecto);
    $project->save();

    return redirect('admin/projects');

  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Customer  $customer
   * @return \Illuminate\Http\Response
   */
  public function show(Request $request, Project $project)
  {
    $customers = Customer::where('role_id','=',Auth::user()->role_id)->pluck( 'nombre_cliente', 'id');
    $users = User::pluck( 'name', 'id');
    
    $fechadehoy = Carbon::yesterday('Europe/Madrid');

    $cuentatareas =  $project->tasks()->count();



    return view('admin.projects.show_projects', compact('customers', 'users', 'fechadehoy', 'cuentatareas'))->withProject($project);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Customer  $customer
   * @return \Illuminate\Http\Response
   */
  public function edit(Project $project)
  {
    $customers = Customer::select(DB::raw("concat(codigo_cliente, '_',nombre_cliente) as cono_cliente"),'id')->where('role_id','=',Auth::user()->role_id)->orderBy('codigo_cliente', 'asc')->pluck( 'cono_cliente', 'id');
    $users = User::where('role_id','=',Auth::user()->role_id)->orderBy('name', 'asc')->pluck( 'name', 'id');
    return view('admin.projects.form_edit_projects', compact('customers', 'users'))->withProject($project);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Customer  $customer
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Project $project)
  {


    $project->customer_id = $request->customer_id;
    $project->user_id = $request->user_id;
    $project->titulo_proyecto = $request->titulo_proyecto;

    $CodigoClienteSeleccionado = Customer::where('id', $request->customer_id)->first();

    $project->codigo_proyecto = $CodigoClienteSeleccionado->codigo_cliente . '_' .$request->titulo_proyecto;
    $project->estado_proyecto = $request->estado_proyecto;
    $project->fechaentrega_proyecto = $request->fechaentrega_proyecto;
    $project->comentario_proyecto = $request->comentario_proyecto;
    $project->slug = Str::slug($CodigoClienteSeleccionado->codigo_cliente . '_' .$request->titulo_proyecto);
    $project->save();

    return redirect('admin/projects');

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Customer  $customer
   * @return \Illuminate\Http\Response
   */
  public function destroy(Project $project)
  {
    $project->delete();
    $project->tasks()->delete();
    return redirect('admin/projects');
  }
}
