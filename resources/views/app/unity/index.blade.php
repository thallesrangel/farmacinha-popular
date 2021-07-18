@extends('template-public')

@section('content')

    <div class="container div-local shadow-lg p-3 mb-5 bg-white rounded">
        <div class="d-flex justify-content-center">
            <img class="img-fluid logo" src="{{ asset('img/logo.png') }}">
        </div>
        <p class="text-center mt-2 p-0">Olá <b>{{ session('collaborator')->first_name}}</b></p>
        
            <div class="d-flex justify-content-center">
                @if($permission)
                <a href="{{ route('unity.create') }} " class="btn btn-success m-2" title="Criar unidades">
                    Criar Unidade
                </a>
                @endif
                <a href="{{ route('login.logout') }}" class="btn btn-outline-danger m-2" title="Sair">
                    Logout
                </a>
            </div>

        @if(session('collaborator')->id_unity)
            <h5 class="text-center">Unidade atual</h5>
            <h6 class="text-muted text-center">{{ session('collaborator')->corporate_name }}</h6>
        @endif        

        <h4 class="text-center mt-2">Selecione uma unidade</h4>

        <ul class="list-group list-unstyled opcoes-local">
            @foreach($data as $item)
                <li class="nav-item"><a class="nav-link" href="{{ route('unity.selected', $item['id']) }}">{{ $item['corporate_name'] }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection