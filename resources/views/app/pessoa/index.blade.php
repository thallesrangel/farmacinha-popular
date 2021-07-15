@extends('template-app')

@section('content')
    <div class="col-sm-12">
        <button type="button" class="btn btn-outline-success">USB - Praia Grande - ES</button>
        <h1>Pessoas</h1>

        <div class="d-grid gap-2 d-md-block">
            <button type="button" class="btn btn-success">Registrar</button>
            <button type="button" class="btn btn-outline-danger">Excluir selecionados</button>
        </div>

        <div class="div-table">
            <table class="table">
                <thead class="table-head">
                <tr>
                    <th title="Selecionar todos"><input type="checkbox" class="selectall"/></th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>SUS</th>
                </tr>
                </thead>
                <tbody class="table-body">
                    <tr class="table-row">
                        <td><input type="checkbox" name="ids[]" value="#" class="selectbox"></td>
                        <td>Roberto Rodrigues Santana</td>
                        <td>146.535.600-70</td>
                        <td>25096668084008</td>
                        <td>
                            <a class="table-info" href="#"><i class="bi bi-info-circle"></i></a>
                            <a class="table-edit" href="#"><i class="bi bi-pencil"></i></a>
                            <a class="table-trash" href="#"><i class="bi bi-trash2"></i></a>
                        </td>
                    </tr>

                    <tr class="table-row">
                        <td><input type="checkbox" name="ids[]" value="#" class="selectbox"></td>
                        <td>Júlia Almeida</td>
                        <td>146.535.600-70</td>
                        <td>228810778930004</td>
                        <td>
                            <a class="table-info" href="#"><i class="bi bi-info-circle"></i></a>
                            <a class="table-edit" href="#"><i class="bi bi-pencil"></i></a>
                            <a class="table-trash" href="#"><i class="bi bi-trash2"></i></a>
                        </td>
                    </tr>

                    <tr class="table-row">
                        <td><input type="checkbox" name="ids[]" value="#" class="selectbox"></td>
                        <td>Patrícia Almeida</td>
                        <td>146.111.220-70</td>
                        <td>211810778930224</td>
                        <td>
                            <a class="table-info" href="#"><i class="bi bi-info-circle"></i></a>
                            <a class="table-edit" href="#"><i class="bi bi-pencil"></i></a>
                            <a class="table-trash" href="#"><i class="bi bi-trash2"></i></a>
                        </td>
                    </tr>

                    <tr class="table-row">
                        <td><input type="checkbox" name="ids[]" value="#" class="selectbox"></td>
                        <td>Lorrayne Barbosa</td>
                        <td>146.535.600-70</td>
                        <td>228810778930004</td>
                        <td>
                            <a class="table-info" href="#"><i class="bi bi-info-circle"></i></a>
                            <a class="table-edit" href="#"><i class="bi bi-pencil"></i></a>
                            <a class="table-trash" href="#"><i class="bi bi-trash2"></i></a>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
@endsection