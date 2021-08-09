@extends('template-app')

@section('content')
    <div class="col-sm-12">
        @include('app.includes.header')
        <h2 class="p-2">Perfil Pessoa</h2>
    </div>
    <div class="col-sm-12 card">
        <h3 class="mt-3 text-center">{{ $people->first_name }} {{ $people->last_name }}</h3>
        
        <h6 class="heading-small text-muted m-3">Informações pessoais</h6>
        <div class="row p-3">
            <div class="col-sm-12 col-md-3">
                <h6 class="fw-bold">Nome Social</h6>
                <p class="date">{{ $people->social_name}}</p>
            </div>
            
            <div class="col-sm-12 col-md-3">
                <h6 class="fw-bold">Nascimento</h6>
                <p class="date">{{ $people->birth_date}}</p>
            </div>
            <div class="col-sm-12 col-md-3">
                <h6 class="fw-bold">Sexo</h6>
                <p class="date">{{ $people->sex}}</p>
            </div>
            <div class="col-sm-12 col-md-3">
                <h6 class="fw-bold">CPF</h6>
                <p class="cpf">{{ $people->cpf }}</p>
            </div>
            <div class="col-sm-12 col-md-3">
                <h6 class="fw-bold">SUS</h6>
                <p class="cpf">{{ $people->sus }}</p>
            </div>

            <div class="col-sm-12 col-md-3">
                <h6 class="fw-bold">Status do Usuário</h6>
                @if($people->flag_status == 'disabled')
                    <p class="txt-red">@if($people->flag_status == 'disabled') Desativado @endif</p>
                @else
                    <p class="txt-green">@if($people->flag_status == 'enabled') Ativo @endif</p>
                @endif
            </div>

        </div>
        <h6 class="heading-small text-muted m-3">Informações de Localização</h6>
        <div class="row p-3">
            <div class="col-sm-12 col-md-3">
                <h6 class="fw-bold">Estado</h6>
                <p>{{ $people->states->name }}</p>
            </div>

            <div class="col-sm-12 col-md-3">
                <h6 class="fw-bold">Cidade</h6>
                <p>{{ $people->city->name }}</p>
            </div>

            <div class="col-sm-12 col-md-3">
                <h6 class="fw-bold">Bairro</h6>
                <p>{{ $people->district }}</p>
            </div>

            <div class="col-sm-12 col-md-3">
                <h6 class="fw-bold">Logradouro</h6>
                <p>{{ $people->address_place }}</p>
            </div>

            <div class="col-sm-12 col-md-3">
                <h6 class="fw-bold">Complemento</h6>
                <p>{{ $people->complement }}</p>
            </div>

            <div class="col-sm-12 col-md-3">
                <h6 class="fw-bold">Número</h6>
                <p>{{ $people->number }}</p>
            </div>
        </div>
        
    </div>
@endsection