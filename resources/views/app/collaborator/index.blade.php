@extends('template-app')

@section('content')
    <div class="col-sm-12">
        @include('app.includes.header')
        <h1>Colaboradores</h1>

        <div class="d-grid gap-2 d-md-block">
            <a href="{{ route('collaborator.registrar') }}" class="btn btn-success">Registrar</a>
            <button type="button" class="btn btn-outline-danger">Excluir selecionados</button>
        </div>

        <div class="div-table">
            <table class="table">
                <thead class="table-head">
                <tr>
                    <th title="Selecionar todos"><input type="checkbox" class="selectall"/></th>
                    <th>Nome Fantasia</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Permissão</th>
                </tr>
                </thead>
                <tbody class="table-body">
                    @foreach($data as $item)
                        <tr class="table-row">
                            <td><input type="checkbox" name="ids[]" value="{{ $item->id }}" class="selectbox"></td>
                            <td> {{ $item->first_name }} </td>
                            <td> {{ $item->cpf }} </td>
                            <td> {{ $item->email }} </td>
                            <td> {{ $item->role }} </td>
                            <td class="d-flex justify-content-center">
                                <a class="btn btn-sm btn-default table-info" href="#"><i class="bi bi-info-circle"></i></a>
                                <a class="btn btn-sm btn-default table-edit" href="#"><i class="bi bi-pencil"></i></a>
                                
                                <form action="{{ route('collaborator.destroy', $item->id)  }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-default table-trash" type="submit"><i class="bi bi-trash2"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection