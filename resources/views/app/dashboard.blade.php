@extends('template-app')

@section('content')
    <div class="col-sm-12">
        <h6 class="text-muted">Olá, {{ session('collaborator.first_name')}} - {{ session('collaborator.id_unity') }} </h6>
        <h6 class="text-muted">{{ $role }}</h6>
        @include('app.includes.header')
        <h2>Dashboard<h2>
        <h4 class="mt-4 mb-3 fw-bold">Atalhos Medicamentos</h4>

        <div class="d-grid gap-2 d-md-block">
            <a href="{{ route('drugin.create') }}" class="btn btn-outline-success">Receber</a>
            <a href="{{ route('drugin.list') }}" class="btn btn-outline-warning">Analisar</a>
            <a href="{{ route('drugavailable.list') }}" class="btn btn-outline-primary">Distribuir</a>
        </div>

        <h4 class="mt-4 mb-3 fw-bold">Medicamentos</h4>
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Recebidos</h5>
                        <h4 class="card-title txt-green">{{ $drugInCount }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Entregues</h5>
                        <h4 class="card-title txt-green">0</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Pendentes de Análise</h5>
                        <h4 class="card-title txt-green">0</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Estoque Geral</h5>
                        <h4 class="card-title txt-green">0</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <h4 class="mt-4 mb-3 fw-bold">Pessoas</h4>
            <div class="col-md-3 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Registrados</h5>
                        <h4 class="card-title txt-green">{{ $peopleCount }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
