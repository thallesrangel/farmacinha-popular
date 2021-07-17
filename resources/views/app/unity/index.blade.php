@extends('template-public')

@section('content')

    <div class="container div-local shadow-lg p-3 mb-5 bg-white rounded">
        <div class="d-flex justify-content-center">
            <img class="img-fluid logo" src="{{ asset('img/logo.png') }}">
        </div>
        <p class="text-center mt-2 p-0">Olá <b>{{ session('collaborator')->first_name}}</b></p>
        @if($permission)
            <div class="d-flex justify-content-center">
                <a href="#" class="btn btn-sm btn-success mb-2 mt-2" title="Crie unidades">
                    Criar Unidade
                </a>
            </div>
        @endif
        
        <h4 class="text-center mt-2">Selecione uma unidade</h4>

        <ul class="list-group list-unstyled opcoes-local">
            @foreach($data as $item)
            <li class="nav-item"><a class="nav-link" href="{{ $item['id'] }}">{{ $item['corporate_name'] }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection