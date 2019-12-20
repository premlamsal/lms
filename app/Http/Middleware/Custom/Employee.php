<?php

namespace App\Http\Middleware\Custom;

use Closure;
use Auth;

class Employee
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
         $user=Auth::user();

        if ($user->user_type=='e') {

            return $next($request);
        }
        else{
            abort(404);
        }
    }
}
