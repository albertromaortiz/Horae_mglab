<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;



use App\User;
use App\Customer;
use App\Project;
use App\Task;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

  // páginas plantilla

    public function index()
    {
    $yo = Auth::user();
    $users = User::all();
    $customers = Customer::where('role_id','=',Auth::user()->role_id)->get();
    $projects = Project::where('role_id','=',Auth::user()->role_id)->get();
    $tasks = Task::where('role_id','=',Auth::user()->role_id)->where('estado_tarea','!=',4)->get();

    $fechadehoy = Carbon::now('Europe/Madrid');
    $fechayesterday = Carbon::yesterday('Europe/Madrid');


    $estasemana = new Carbon('next sunday');



    $tareassemana=  $yo->tasks()->where('fechaentrega_tarea','<=', $estasemana)->where('estado_tarea','!=',4)->get();
    $tareasparamastarde=  $yo->tasks()->where('fechaentrega_tarea','>', $estasemana)->where('estado_tarea','!=',4)->get();
    $tareascalendario=  $yo->tasks()->where('estado_tarea','!=',4)->get();




    return view('admin.dashboard', compact('users', 'customers', 'projects', 'tasks', 'yo', 'fechadehoy', 'estasemana', 'tareassemana', 'tareasparamastarde', 'tareascalendario', 'fechayesterday'));
    }



}
