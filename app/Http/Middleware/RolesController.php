<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RolesController
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

      if (Auth::user()->role_id == 1) {
          return $next($request);
      }
      elseif (Auth::user()->role_id == 2) {
          return redirect('admin/foo');
      }

      else {
        return redirect('/admin');

      }

    }
}
