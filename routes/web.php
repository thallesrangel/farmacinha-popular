<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('public.index');
});


Route::get('/login', function () {
    return view('app.sign.signIn');
});


Route::get('/app', function () {
    return view('app.dashboard');
});

Route::get('/app/pessoa', function () {
    return view('app.pessoa.index');
});

Route::get('/app/pessoa/registrar', function () {
    return view('app.pessoa.create');
});

Route::resource('app/unidade', App\Http\Controllers\UnityController::class, [
    'names' => [
        'index' => 'unity.list'
    ]
]);