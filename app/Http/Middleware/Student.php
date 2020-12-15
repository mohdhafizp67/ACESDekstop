<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Student
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      if (!Auth::check()) {
          return redirect()->route('login');
      }

      if (Auth::user()->is_admin == 1 ||  Auth::user()->is_ecerdb_personnel == 1) {
        return redirect()->route('home');
      }

      if (Auth::user()->is_student == 1) {
          return $next($request);
      }
    }
}
