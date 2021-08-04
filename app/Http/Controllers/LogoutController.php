<?php

namespace App\Http\Controllers;

class LogoutController extends Controller
{    
    public function logout()
    {
        session()->flush();
        return redirect()->route('login.signIn')->with('logout_success', 'Ótimo trabalho, até logo!');;
    }
}
