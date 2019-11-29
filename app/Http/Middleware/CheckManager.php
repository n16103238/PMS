<?php

namespace App\Http\Middleware;

use Auth;

use Closure;

class CheckManager
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
      $userRoles = Auth::user()->roles->pluck('name');
if($userRoles->contains('Manager')){
  return $next($request);
}
return redirect('login');
    }
}
