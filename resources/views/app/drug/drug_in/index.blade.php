@extends('template-app')

@section('content')
    <div class="col-sm-12">
        @include('app.includes.header')
        <h2>Medicamentos Recebidos</h2>

        <div class="d-grid gap-2 d-md-block">
          
            <a href="{{ route('drugin.create') }}" class="btn btn-success">Registrar</a>
            <div class="div-table">
                <table class="table table-responsive">
                    <thead class="table-head">
                    <tr>
                        <th>Medicamento</th>
                        <th>Laboratório</th>
                        <th>Doador</th>
                        <th>Quantidade</th>
                        <th>Validade</th>
                    </tr>
                    </thead>
                    <tbody class="table-body">
                        @foreach($data as $item)
                            <tr class="table-row">
                                <td> {{ $item->name }} </td>
                                <td> {{ $item->laboratory->name }}</td>
                                <td> {{ $item->people->first_name }} </td>
                                <td> {{ $item->amount }} - {{ $item->measurement->abbreviation }} </td>
                                <td> {{ $item->expiration_date }} </td>
                                <td class="d-flex justify-content-center">
                                    <a class="btn btn-sm btn-default table-info" href="{{ route('people.profile', $item->id) }}"><i class="bi bi-info-circle"></i></a>
                                    
                                    @if (in_array(session('collaborator.role'), ['gestor_geral', 'gestor_estadual', 'gestor_unidade' ]))
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
                            <th>Medicamento</th>
                            <th>Laboratório</th>
                            <th>Doador</th>
                            <th>Quantidade</th>
                            <th>Validade</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        @include('app.includes.pagination')
    </div>
@endsection