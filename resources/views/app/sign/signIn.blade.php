@extends('template-public')

@section('content')
<div class="d-flex align-items-center min-vh-100">
    <div class="container d-flex justify-content-center">
        <div class="col-md-4 shadow-lg p-3 mb-5 bg-white rounded">
            <div class="d-flex justify-content-center">
                <img class="img-fluid logo" src="{{ asset('img/logo.png')}}">
            </div>
    
            <form class="p-3" action="{{ route('login.logar') }}" method="POST" id="form" autocomplete="off">
                @csrf
                <h3 class="mt-3 fw-bold">Login</h3>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" autocomplete="off" id="campo" placeholder="Email" required autofocus/>
                </div>
    
                <div class="form-group">
                    <input class="form-control" type="password" name="password" autocomplete="off" placeholder="Senha" required/>
                </div>
                <div class="buttons text-center">
                    <button type="submit" class="btn btn-success btn-lg w-100 btn-block fw-bold">Entrar</button>
                    <hr class="mt-4 mb-4">
                    <p><a class="btn btn-primary fw-bold" href="#">Criar conta</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection