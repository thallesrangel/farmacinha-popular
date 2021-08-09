@extends('template-public')

@section('content')

    <div class="container bg-white rounded">
        <div class="d-flex justify-content-center">
            <img class="img-fluid logo" src="{{ asset('img/logo.png') }}">
        </div>
        <p class="text-center mt-2 p-0">Olá, <b>{{ session('collaborator')->first_name}}</b></p>
        
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

        <h4 class="text-center mt-2">Selecione uma unidade clicando em <i class="bi bi-check-square-fill text-green"></i></h4>

        <div class="div-table">
            <table class="table">
                <thead class="table-head">
                <tr>
                    <th>Unidades</th>
                    <th>Localização</th>
                </tr>
                </thead>
                <tbody class="table-body">
                    @foreach($data as $item)
                        <tr class="table-row">
                            <td>{{ $item['corporate_name'] }}</a></td>
                            <td>{{ $item['states']['abbreviation'] }} - {{ $item['city']['name'] }}</a></td>
                            <td class="d-flex">
                                <a class="text-green" title="Selecionar Unidade" href="{{ route('unity.selected', $item['id']) }}"><i class="bi bi-check-square-fill"></i></a>
                                <a class="btn btn-sm btn-default table-info" href="{{ route('unity.profile', $item->id) }}"><i class="bi bi-info-circle"></i></a>
                                <a class="text-yellow" title="Detalhes" href="{{ route('unity.edit', $item['id']) }}"><i class="bi bi-pencil"></i></a>
                                
                                <form action="{{ route('unity.disable', $item->id)  }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-default table-trash" title="Desativar" type="submit"><i class="bi bi-trash2"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('app.includes.pagination')
    </div>
@endsection