<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class UnitySelected
{
    public function handle($request, Closure $next)
    {

        if (in_array(session('collaborator.role'), [ 'analista', 'assistente' ]) && !session('collaborator.id_unity') ) {
            session()->flush();
            return redirect(route('login.signIn'))->with('not_found_id_unity', 'Usuário sem unidade atribuída, contatar o administrador do sistema');
        }

        if (!session('collaborator.id_unity')) {
            return redirect()->route('unity.list');
        }

        return $next($request);
    }
}
