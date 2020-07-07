<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Userisadmin
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
        $roles=$user->role;
        foreach ($roles as $role) {
            if ($role->role=='admin')
            {
                return redirect('home');

            }
            return $next($request);
        }

    }
}
