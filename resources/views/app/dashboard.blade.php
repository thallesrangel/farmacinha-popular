@extends('template-app')

@section('content')
    <div class="col-sm-12">
        <button type="button" class="btn btn-outline-success">USB - Praia Grande - ES</button>
        <h1>Dashboard<h1>
        <h4 class="mt-4 mb-3 fw-bold">Atalhos Medicamentos</h4>

        <div class="d-grid gap-2 d-md-block">
            <button type="button" class="btn btn-outline-success fw-bold">Receber</button>
            <button type="button" class="btn btn-outline-warning fw-bold">Analisar</button>
            <button type="button" class="btn btn-outline-primary fw-bold">Distribuir</button>
        </div>

        <h4 class="mt-4 mb-3 fw-bold">Medicamentos</h4>
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Recebidos</h5>
                        <h4 class="card-title txt-green">1239</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Entregues</h5>
                        <h4 class="card-title txt-green">1239</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Pendentes de Análise</h5>
                        <h4 class="card-title txt-green">1239</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Estoque Geral</h5>
                        <h4 class="card-title txt-green">1239</h4>
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
                        <h4 class="card-title txt-green">1239</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
