<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collaborator;


class LoginController extends Controller
{
    public function index()
    {
        if (session('collaborator.id')) {
            return redirect()->route('dashboard');
        }
        
        return view('app.sign.signIn');
    }

    public function login(Request $request)
    {
        $login = addslashes($request->email);
        $password = md5($request->password);
        
        $usuario = Collaborator::where('email', '=', $login)->where('password', '=', $password)->first();

        return $this->logarUsuario($usuario);
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('signIn');
    }

    private function logarUsuario($usuario)
    {
        if (!empty($usuario)) {
                session()->put('collaborator', $usuario);
                return redirect()->route('dashboard');
        } else {
            # Mensagem
            session()->flash('alert', 'login_incorreto');

            return redirect()->route('signIn');
        }
    }
}