<?php

namespace App\Http\Controllers;

use App\Models\Collaborator;
use App\Http\Requests\CollaboratorLoginRequest;

class LoginController extends Controller
{
    public function index()
    {
        if (session('collaborator.id')) {
            return redirect()->route('dashboard');
        }
        
        return view('app.sign.signIn');
    }

    public function login(CollaboratorLoginRequest $request)
    {
        $login = addslashes($request->email);
        $password = md5($request->password);
        
        $usuario = Collaborator::where('email', '=', $login)->where('password', '=', $password)->first();
        
        return $this->logarUsuario($usuario);
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('login.signIn')->with('logout_success', 'Ótimo trabalho, até logo!');;
    }

    private function logarUsuario($usuario)
    {
        if (!empty($usuario)) {
                session()->put('collaborator', $usuario);
                return redirect()->route('dashboard')->with('login_success', 'Vamos fazer a diferença');
        } else { 
            return redirect()->route('login.signIn')->with('login_error', 'Usuário ou senha incorreto');
        }
    }
}