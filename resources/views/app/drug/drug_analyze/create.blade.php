@extends('template-app')

@section('content')
    <div class="col-sm-12">
        <div class="col-12">
           
            <div class="card-body m-0 p-0">
                @include('app.includes.header')
                <h1>Análise do Medicamento</h1>
                <form action="{{ route('druganalyze.store') }}" method="POST" autocomplete="off">
                    <input type="hidden"  name="id_drug_in" value="{{ $data->id }}">
                    @csrf
                    <h6 class="heading-small text-muted mt-3">Informações gerais</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-2">
                                <h6 class="fw-bold">ID Medicamento</h6>
                                <p>{{ $data->id }}</p>
                            </div>

                            <div class="col-md-3">
                                <h6 class="fw-bold">Medicamento</h6>
                                <p>{{ $data->name }}</p>
                            </div>

                            <div class="col-md-2">
                                <h6 class="fw-bold">Tarja</h6>
                                <p>{{ $data->stripe->name }}</p>
                            </div>

                            <div class="col-md-3">
                                <h6 class="fw-bold">Laboratório</h6>
                                <p>{{ $data->laboratory->name }}</p>
                            </div>

                            <div class="col-md-2">
                                <h6 class="fw-bold">Quantidade</h6>
                                <p>{{ $data->amount }} - {{ $data->measurement->abbreviation }}</p>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="fw-bold">Colaborador Receptor</h6>
                                    <p>{{ $data->collaborator->first_name }} {{ $data->collaborator->last_name }}</p>
                                </div>

                                <div class="col-md-3">
                                    <h6 class="fw-bold">Tipo de Medicamento</h6>
                                    <p>{{ $data->drugType->name }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="">
                        </div>

                        
                    </div>
                    
                    <h6 class="heading-small text-muted mb-2 mt-3">Informações do Doador</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-2">
                                <h6 class="fw-bold">Nome</h6>
                                <p>{{ $data->people->first_name }} {{ $data->people->last_name }}</p>
                            </div>

                            <div class="col-md-2">
                                <h6 class="fw-bold">CPF</h6>
                                <p class="cpf">{{ $data->people->cpf }}</p>
                            </div>

                            <div class="col-md-2">
                                <h6 class="fw-bold">SUS</h6>
                                <p>{{ $data->people->sus }}</p>
                            </div>
                        </div>
                        
                    </div>

                    <h6 class="heading-small text-muted mb-2 mt-3">Análise</h6>
                    <div class="pl-lg-4">
                        <div class="row">

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-conservation">Conservação *</label>
                                    <select class="form-control" id="input-conservation" name="analyze_conservation" required>
                                        <option value="approved">Aprovado</option>
                                        <option value="failed">Reprovado</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-result">Resultado da Análise *</label>
                                    <select class="form-control" id="input-result" name="analyze_result" required>
                                        <option value="approved">Aprovado</option>
                                        <option value="failed">Reprovado</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <button class="btn btn-success" type="submit">Salvar</button>
                    <a class="btn btn-outline-danger" href="#">Voltar</a>
                    
                </form>
            </div>
        </div>
    </div>
@endsection