@extends('template-app')

@section('content')
    <div class="col-sm-12">
        @include('app.includes.header')
        <h2>Medicamentos Recebidos</h2>
        @if (in_array(session('collaborator.role'), ['gestor_geral', 'gestor_estadual', 'gestor_unidade', 'analista']))
            <h5 class="mt-2">Analise um medicamento clicando em <i class="bi bi-clipboard-check txt-yellow"></i></h5>
        @endif
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
                        <th>Etapa</th>
                    </tr>
                    </thead>
                    <tbody class="table-body">
                        @foreach($data as $item)
                            <tr class="table-row">
                                <td> {{ $item->name }} </td>
                                <td> {{ $item->laboratory->name }}</td>
                                <td> <a href="{{ route('people.profile', $item->people->id) }}">{{ $item->people->first_name }} </a></td>
                                <td> <span class="amount">{{ $item->amount }}</span> - {{ $item->measurement->abbreviation }} </td>
                                <td> {{ $item->expiration_date }} </td>
                                
                                @switch($item->step)
                                    @case('analyze')
                                        <td class="text-yellow">Analisar</td>
                                        @break

                                    @case('available')
                                        <td class="txt-green">Disponível</td>
                                        @break
                                    @case('distributed')
                                        <td>Distribuído</td>
                                        @break
             
                                @endswitch

                                <td class="d-flex justify-content-center">
                                    @if (in_array(session('collaborator.role'), ['gestor_geral', 'gestor_estadual', 'gestor_unidade', 'analista']) && $item->step == 'analyze')
                                        <a href="{{ route('druganalyze.create', $item->id) }}" class="btn btn-sm btn-default txt-yellow"><i class="bi bi-clipboard-check"></i></a>
                                    @endif

                                    @if (in_array(session('collaborator.role'), ['gestor_geral', 'gestor_estadual', 'gestor_unidade', 'analista']) && $item->step != 'analyze')
                                        <span class="btn btn-sm btn-default disabled"><i class="bi bi-clipboard-check"></i></span>
                                    @endif
                                    <a class="btn btn-sm btn-default table-info" href="{{ route('drug.profile', $item->id) }}"><i class="bi bi-info-circle"></i></a>
                                    
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
                            <th>Etapa</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        @include('app.includes.pagination')
    </div>
@endsection