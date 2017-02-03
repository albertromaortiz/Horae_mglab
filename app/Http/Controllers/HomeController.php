<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
    return view('admin.dashboard');
    }

    public function list_usuarios()
    {
        return view('admin.list_usuarios');
    }

    public function form_usuarios()
    {
        return view('admin.form_usuarios');
    }

    public function list_clientes()
    {
        return view('admin.list_clientes');
    }

    public function list_proyectos()
    {
        return view('admin.list_proyectos');
    }

    public function list_tareas()
    {
        return view('admin.list_tareas');
    }

    public function form()
    {
        return view('admin.form');
    }


}
