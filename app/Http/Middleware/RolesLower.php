<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RolesLower
{
    public function handle(Request $request, Closure $next)
    {
        switch (session('collaborator.role')) {
            case 'gestor_unidade':
            case 'analista':
            case 'assistente':
                return redirect()->route('dashboard')->with('permission_denied', 'Acesso negado');
                break;            
        }
        
        return $next($request);
    }
}
