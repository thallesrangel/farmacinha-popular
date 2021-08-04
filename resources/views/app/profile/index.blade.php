@extends('template-app')

@section('content')
    <div class="col-sm-12">
        @include('app.includes.header')
        <h2 class="p-2">Perfil do Colaborador</h2>
    </div>
    <div class="col-sm-12 card">
        <h3 class="mt-3 text-center">{{ $collaborator->first_name }} {{ $collaborator->last_name }}</h3>
        <p class="text-center">{{ $role }}</p>
        <h6 class="heading-small text-muted m-3">Informações pessoais</h6>
        <div class="row p-3">
            <div class="col-md-3">
                <h6 class="fw-bold">CPF</h6>
                <p class="cpf">{{ $collaborator->cpf }}</p>
            </div>
            <div class="col-md-3">
                <h6 class="fw-bold">Estado</h6>
                <p>{{ $collaborator->states->name }}</p>
            </div>
            <div class="col-md-3">
                <h6 class="fw-bold">Cidade</h6>
                <p>{{ $collaborator->city->name }}</p>
            </div>
            <div class="col-md-3">
                <h6 class="fw-bold">Nascimento</h6>
                <p class="date">{{ $collaborator->birth_date}}</p>
            </div>
        </div>
        <h6 class="heading-small text-muted m-3">Informações gerais</h6>
        <div class="row p-3">
            <div class="col-md-3">
                <h6 class="fw-bold">Acesso</h6>
                <p>{{ $collaborator->role }}</p>
            </div>
        </div>
    </div>
@endsection