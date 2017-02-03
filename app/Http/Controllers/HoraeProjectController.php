<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str as Str;

class HoraeProjectController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $projects = Project::all();
    return view('admin.projects.list_projects', compact('projects'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('admin.projects.form_ins_projects');
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

    $project->codigo_cliente = $request->codigo_cliente;
    $project->nombre_cliente = $request->nombre_cliente;
    $project->email_cliente = $request->email_cliente;
    $project->telefono_cliente = $request->telefono_cliente;
    $project->contacto_cliente = $request->contacto_cliente;
    $project->slug = Str::slug($request->nombre_cliente);
    $project->save();

    return redirect('admin/projects');

  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Customer  $customer
   * @return \Illuminate\Http\Response
   */
  public function show(Project $project)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Customer  $customer
   * @return \Illuminate\Http\Response
   */
  public function edit(Customer $project)
  {

    return view('admin.projects.form_edit_projects')->withProject($project);
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


    $project->codigo_cliente = $request->codigo_cliente;
    $project->nombre_cliente = $request->nombre_cliente;
    $project->email_cliente = $request->email_cliente;
    $project->telefono_cliente = $request->telefono_cliente;
    $project->contacto_cliente = $request->contacto_cliente;
    $project->slug = Str::slug($request->nombre_cliente);
    $project->save();

    return redirect('admin/customers');
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
    return redirect('admin/projects');
  }
}
