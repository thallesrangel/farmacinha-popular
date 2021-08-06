@extends('template-app')

@section('content')
    <div class="col-sm-12">
        @include('app.includes.header')
        <h2>Analisados</h2>

            <div class="div-table">
                <table class="table">
                    <thead class="table-head">
                    <tr>
                        <th>Medicamento</th>
                        <th>Analista</th>
                        <th>Data Análise</th>
                    </tr>
                    </thead>
                    <tbody class="table-body">
                        @foreach($data as $item)
                            <tr class="table-row">
                                <td><a href="#">{{ $item->drugIn->name }}</a></td>
                                <td>{{ $item->collaborator->first_name }}</td>
                                <td> {{ $item->created_at }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot class="table-head">
                        <tr>
                            <th>Medicamento</th>
                            <th>Analista</th>
                            <th>Data Análise</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </form>
        @include('app.includes.pagination')
    </div>
@endsection