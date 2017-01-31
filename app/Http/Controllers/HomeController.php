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
    public function index()
    {
      switch (Auth::user()->role_id) {
        case '1':
            return view('admin.homemaster');
          break;

          case '2':
              return view('admin.homeusers');
            break;

        default:
              return view('admin.home');
          break;
      }

    }


    public function list()
    {
        return view('admin.list');
    }
}
