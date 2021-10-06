@extends('template-app')

@section('content')
    <div class="col-sm-12">
        @include('app.includes.header')
        <h2>Medicamentos Disponíveis</h2>
        <div class="d-grid gap-2 d-md-block">
            <div class="div-table">
                <table class="table table-responsive">
                    <thead class="table-head">
                    <tr>
                        <th>Medicamento</th>
                        <th>Disponível</th>
                        <th>Métrica</th>
                    </tr>
                    </thead>
                    <tbody class="table-body">
                        @foreach($data as $item)
                            <tr class="table-row">
                                <td> {{ $item->drugIn->name }} </td>
                                <td class="amount"> {{ $item->drugIn->amount }} </td>     
                                <td> {{ $item->drugIn->measurement->name }} </td> 
                                <td class="d-flex justify-content-center">
                                    <a class="btn btn-sm btn-default table-info" href="{{ route('drug.profile', $item->id) }}"><i class="bi bi-box"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot class="table-head">
                        <tr>
                            <th>Medicamento</th>
                            <th>Disponível</th>
                            <th>Métrica</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        @include('app.includes.pagination')
    </div>
@endsection