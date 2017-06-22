<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Carbon\Carbon;
use Auth;

class HoraeTaskCalendarController extends Controller
{
  public function index()
  {
        $tasks = Task::where('role_id','=',Auth::user()->role_id)->where('estado_tarea','!=',4)->get();

        return view('admin.tasks.calendar_tasks', compact('tasks'));



  }
}
