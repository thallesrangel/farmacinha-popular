@extends('template-app')

@section('content')
    <div class="col-sm-12">
        <button type="button" class="btn btn-outline-success">USB - Praia Grande - ES</button>
        <h1>Unidade</h1>

        <div class="d-grid gap-2 d-md-block">
            <button type="button" class="btn btn-success">Registrar</button>
        </div>

        <div class="div-table">
            <table class="table">
                <thead class="table-head">
                <tr>
                    <th>Nome Fantasia</th>
                    <th>CNES</th>
                </tr>
                </thead>
                <tbody class="table-body">
                    @foreach($data as $item)
                        <tr class="table-row">
                            <td> {{ $item->corporate_name}} </td>
                            <td> {{ $item->cnes}} </td>
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