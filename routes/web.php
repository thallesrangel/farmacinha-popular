<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CollaboratorAutenticate;
use App\Http\Middleware\UnitySelected;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\UnityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CollaboratorController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CityController;

use App\Http\Controllers\Drug\DrugInController;

use App\Http\Controllers\Profile\CollaboratorProfileController;
use App\Http\Controllers\Profile\PeopleProfileController;
use App\Http\Controllers\Profile\UnityProfileController;

Route::get('/', function () {
    return view('public.index');
});

Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login.signIn');
    Route::post('/logar', [LoginController::class, 'login'])->name('login.logar');
    Route::get('/logout', [LogoutController::class, 'logout'])->name('login.logout');
});

Route::middleware([CollaboratorAutenticate::class])->group(function () {
    Route::prefix('app')->group(function () {

        Route::get('/cidades/{id}', [CityController::class, 'getById']);
        
        Route::prefix('unidade')->group(function () {
            Route::get('/', [UnityController::class, 'index'])->name('unity.list');
            Route::get('/registrar', [UnityController::class, 'create'])->name('unity.create');
            Route::get('/{id}', [UnityController::class, 'selected'])->name('unity.selected');
            Route::delete('/{id}', [UnityController::class, 'disable'])->name('unity.disable');
            Route::post('/salvar', [UnityController::class, 'store'])->name('unity.store');
            Route::get('/perfil/{id}', [UnityProfileController::class, 'profile'])->name('unity.profile');
            Route::get('/{id}/editar', [UnityController::class, 'edit'])->name('unity.edit');
            Route::put('/{id}/atualizar', [UnityController::class, 'update'])->name('unity.update');
        });

        Route::middleware([UnitySelected::class])->group(function () {
            Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

            Route::prefix('colaborador')->group(function () {
                Route::get('/', [CollaboratorController::class, 'index'])->name('collaborator.list');
                Route::get('/registrar', [CollaboratorController::class, 'create'])->name('collaborator.create');
                Route::post('/salvar', [CollaboratorController::class, 'store'])->name('collaborator.store');
                Route::delete('/disable-selected', [CollaboratorController::class, 'disableSelected'])->name('collaborator.disable.selected');
                Route::delete('/{id}', [CollaboratorController::class, 'disable'])->name('collaborator.disable');
                Route::get('/perfil/{id}', [CollaboratorProfileController::class, 'profile'])->name('collaborator.profile');
                Route::get('/{id}/editar', [CollaboratorController::class, 'edit'])->name('collaborator.edit');
                Route::put('/{id}/atualizar', [CollaboratorController::class, 'update'])->name('collaborator.update');
            });
    
            Route::prefix('pessoa')->group(function () {
                Route::get('/', [PeopleController::class, 'index'])->name('people.list');
                Route::get('/registrar', [PeopleController::class, 'create'])->name('people.create');
                Route::post('/salvar', [PeopleController::class, 'store'])->name('people.store');
                Route::delete('/disable-selected', [PeopleController::class, 'disableSelected'])->name('people.disable.selected');
                Route::delete('/{id}', [PeopleController::class, 'disable'])->name('people.disable');
                Route::get('/perfil/{id}', [PeopleProfileController::class, 'profile'])->name('people.profile');
            });

            Route::prefix('medicamento')->group(function () {
                Route::get('/', [DrugInController::class, 'index'])->name('drugin.list');
                Route::get('/registrar', [DrugInController::class, 'create'])->name('drugin.create');
                Route::post('/salvar', [DrugInController::class, 'store'])->name('drugin.store');
            });

            Route::prefix('relatorio')->group(function () {
                Route::get('/', [ReportController::class, 'index'])->name('report.index');
            });
            
        });
    });
});
