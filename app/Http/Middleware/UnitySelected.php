<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class UnitySelected
{
    public function handle($request, Closure $next)
    {
        if (!session('collaborator.id_unity')) {
            return redirect()->route('unity.list');
        }

        return $next($request);
    }
}
