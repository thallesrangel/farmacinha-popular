@extends('template-app')

@section('content')
    <div class="col-sm-12">
        @include('app.includes.header')
        <h2 class="mt-3 mb-3">Fluxo do medicamento</h2>
        <div class="col-12">

            <h6 class="heading-small text-muted mt-3 ">Informações do Medicamento</h6>
            <div class="pl-lg-4">
                <div class="row">

                    <div class="col-md-2">
                        <h6 class="fw-bold">ID</h6>
                        <p>{{ $drugIn->id }}</p>
                    </div>

                    <div class="col-md-3">
                        <h6 class="fw-bold">Medicamento</h6>
                        <p>{{ $drugIn->name }}</p>
                    </div>

                    <div class="col-md-2">
                        <h6 class="fw-bold">Total</h6>
                        <p>{{ $drugIn->amount }} {{ $drugIn->measurement->abbreviation }}</p>
                    </div>

                    <div class="col-md-2">
                        <h6 class="fw-bold">Unidade de Medida</h6>
                        <p>{{ $drugIn->measurement->name }}</p>
                    </div>

                    <div class="col-md-2">
                        <h6 class="fw-bold">Classificação</h6>
                        <p>{{ $drugIn->drugType->name }}</p>           
                    </div>

                </div>
                
                <div class="row">

                    <div class="col-md-2">
                        <h6 class="fw-bold">Classificação</h6>
                        <p>{{ $drugIn->drugType->name }}</p>           
                    </div>

                    <div class="col-md-3">
                        <h6 class="fw-bold">Laboratório</h6>
                        <p>{{ $drugIn->laboratory->name }}</p>           
                    </div>

                    <div class="col-md-2">
                        <h6 class="fw-bold">Vencimento</h6>
                        <p>{{ $drugIn->expiration_date }}</p>           
                    </div>
                    
                    <div class="col-md-3">
                        <h6 class="fw-bold">Tarja</h6>
                        <p>{{ $drugIn->stripe->name }}</p>           
                    </div>
                    
                </div>
            </div>
            <hr>
            <h6 class="heading-small text-muted mt-3">Informações do Receptor</h6>
            <div class="pl-lg-4">
                <div class="row">

                    <div class="col-md-3">
                        <h6 class="fw-bold">Nome Completo</h6>
                        <p>{{ $drugIn->collaborator->first_name }} {{ $drugIn->collaborator->last_name }}</p>
                    </div>

                    <div class="col-md-2">
                        <h6 class="fw-bold">Registro Profissional</h6>
                        <p>{{ $drugIn->collaborator->professional_record }}</p>
                    </div>

                </div>
            </div>
            <hr>
            <h6 class="heading-small text-muted mt-3">Informações Doador</h6>
            <div class="pl-lg-4">
                <div class="row">

                    <div class="col-md-3">
                        <h6 class="fw-bold">Nome Completo</h6>
                        <p>{{ $drugIn->people->first_name }} {{ $drugIn->people->last_name }}</p>
                    </div>

                    <div class="col-md-2">
                        <h6 class="fw-bold">CPF</h6>
                        <p class="cpf">{{ $drugIn->people->cpf }}</p>
                    </div>

                    <div class="col-md-2">
                        <h6 class="fw-bold">SUS</h6>
                        <p>{{ $drugIn->people->sus }}</p>
                    </div>
                </div>
            </div>

            @if(isset($$drugAnalyze))
            <hr>
            <h6 class="heading-small text-muted mt-3">Resultado da Análise</h6>
            <div class="pl-lg-4">
                <div class="row">
                    <div class="col-md-3">
                        <h6 class="fw-bold">Analista</h6>
                        <p>{{ $drugAnalyze->collaborator->first_name }} {{ $drugAnalyze->collaborator->last_name }}</p>
                    </div>
                    
                    <div class="col-md-3">
                        <h6 class="fw-bold">Estado de Conservação</h6>
                        <p>@if($drugAnalyze->analyze_conservation == 'approved') Aprovado @else Reprovado @endif</p>
                    </div>

                    <div class="col-md-3">
                        <h6 class="fw-bold">Resultado da Análise</h6>
                        <p>@if($drugAnalyze->analyze_result == 'approved') Aprovado @else Reprovado @endif</p>
                    </div>

                    <div class="col-md-3">
                        <h6 class="fw-bold">Data da Análise</h6>
                        <p>{{ $drugAnalyze->created_at }}</p>
                    </div>
                </div>
            </div>
            @endisset
        </div>
    </div>
@endsection