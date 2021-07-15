<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CollaboratorAutenticate;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('public.index');
});


Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login.signin');
    Route::post('/logar', [LoginController::class, 'login'])->name('login.logar');
    Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
});


Route::middleware([CollaboratorAutenticate::class])->group(function () {
    Route::prefix('app')->group(function () {

        Route::get('/', function () {
            return view('app.dashboard');
        })->name('dashboard');

        Route::get('pessoa', function () {
            return view('app.pessoa.index');
        });
        
        Route::get('pessoa/registrar', function () {
            return view('app.pessoa.create');
        });

        Route::resource('unidade', App\Http\Controllers\UnityController::class, [
            'names' => [
                'index' => 'unity.list'
            ]
        ]);
    });
});
