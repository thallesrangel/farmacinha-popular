@extends('template-app')

@section('content')
    <div class="col-sm-12">
        @include('app.includes.header')
        <h2>Pessoas</h2>

        <form method="post" class="d-grid gap-2 d-md-block">
            @method('DELETE')
            @csrf
                <a href="{{ route('people.create') }}" class="btn btn-success">Registrar</a>
                <button formaction="{{ route('people.disable.selected') }}" class="btn btn-outline-danger" type="submit">Excluir selecionados</button>
            <div class="div-table">
                <table class="table">
                    <thead class="table-head">
                    <tr>
                        <th title="Selecionar todos"><input type="checkbox" class="selectall"/></th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>SUS</th>
                        <th>Localização</th>
                    </tr>
                    </thead>
                    <tbody class="table-body">
                        @foreach($data as $item)
                            <tr class="table-row">
                                <td><input type="checkbox" name="ids[]" value="{{ $item->id }}" class="selectbox"></td>
                                <td> {{ $item->first_name }} </td>
                                <td class="cpf"> {{ $item->cpf }} </td>
                                <td> {{ $item->sus   }} </td>
                                <td> {{ $item->states->abbreviation }} - {{ $item->city->name }} </td>
                                <td class="d-flex justify-content-center">
                                    <a class="btn btn-sm btn-default table-info" href="{{ route('people.profile', $item->id) }}"><i class="bi bi-info-circle"></i></a>
                                    
                                    @if (in_array(session('collaborator.role'), ['gestor_geral', 'gestor_estadual', 'gestor_unidade' ]))
                                        <a class="btn btn-sm btn-default table-edit" href="{{ route('collaborator.edit', $item->id) }}"><i class="bi bi-pencil"></i></a>
                                        
                                        <form action="{{ route('people.disable', $item->id)  }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-default table-trash" type="submit"><i class="bi bi-trash2"></i></button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot class="table-head">
                        <tr>
                            <th title="Selecionar todos"><input type="checkbox" class="selectall2"/></th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>SUS</th>
                            <th>Localização</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </form>
        @include('app.includes.pagination')
    </div>
@endsection