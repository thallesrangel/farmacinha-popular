<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CollaboratorAutenticate
{
    public function handle($request, Closure $next)
    {
        if (!session('collaborator')) {
   
            return redirect()->route('login.signIn');
        }

        return $next($request);
    }
}