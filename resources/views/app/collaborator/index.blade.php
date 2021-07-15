@extends('template-app')

@section('content')
    <div class="col-sm-12">
        <button type="button" class="btn btn-outline-success">USB - Praia Grande - ES</button>
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
                            <td><input type="checkbox" name="ids[]" value="#" class="selectbox"></td>
                            <td> {{ $item->first_name }} </td>
                            <td> {{ $item->cpf }} </td>
                            <td> {{ $item->email }} </td>
                            <td> {{ $item->role }} </td>
                            <td>
                                <a class="table-info" href="#"><i class="bi bi-info-circle"></i></a>
                                <a class="table-edit" href="#"><i class="bi bi-pencil"></i></a>
                                <a class="table-trash" href="#"><i class="bi bi-trash2"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection