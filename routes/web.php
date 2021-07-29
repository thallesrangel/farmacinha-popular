<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CollaboratorAutenticate;
use App\Http\Middleware\UnitySelected;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('public.index');
});


Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login.signIn');
    Route::post('/logar', [LoginController::class, 'login'])->name('login.logar');
    Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
});


Route::middleware([CollaboratorAutenticate::class])->group(function () {
    Route::prefix('app')->group(function () {

        Route::prefix('unidade')->group(function () {
            Route::get('/', [App\Http\Controllers\UnityController::class, 'index'])->name('unity.list');
            Route::get('/registrar', [App\Http\Controllers\UnityController::class, 'create'])->name('unity.create');
            Route::get('/{id}', [App\Http\Controllers\UnityController::class, 'selected'])->name('unity.selected');
            Route::delete('/{id}', [App\Http\Controllers\UnityController::class, 'disabled'])->name('unity.disabled');
            Route::post('/salvar', [App\Http\Controllers\UnityController::class, 'store'])->name('unity.store');
        });

        Route::middleware([UnitySelected::class])->group(function () {
            Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

            Route::get('pessoa', function () {
                return view('app.pessoa.index');
            });
            
            Route::get('pessoa/registrar', function () {
                return view('app.pessoa.create');
            });

            Route::prefix('colaborador')->group(function () {
                Route::get('/', [App\Http\Controllers\CollaboratorController::class, 'index'])->name('collaborator.list');
                Route::get('/registrar', [App\Http\Controllers\CollaboratorController::class, 'create'])->name('collaborator.registrar');
                Route::post('/salvar', [App\Http\Controllers\CollaboratorController::class, 'store'])->name('collaborator.store');
                Route::delete('/{id}', [App\Http\Controllers\CollaboratorController::class, 'destroy'])->name('collaborator.destroy');
                Route::get('/perfil/{id}', [App\Http\Controllers\CollaboratorController::class, 'profile'])->name('collaborator.profile');
            });

            Route::prefix('relatorio')->group(function () {
                Route::get('/', [App\Http\Controllers\ReportController::class, 'index'])->name('report.index');
            });
        });
    });
});
