<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class UnitySelected
{
    public function handle($request, Closure $next)
    {

        if (in_array(session('collaborator.role'), [ 'analista', 'assistente' ]) && !session('collaborator.id_unity') ) {
            die('Usuário sem id unity, contatar administrador do sistema');
        }

        if (!session('collaborator.id_unity')) {
            return redirect()->route('unity.list');
        }

        return $next($request);
    }
}
