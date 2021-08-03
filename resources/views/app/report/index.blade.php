@extends('template-app')

@section('content')
<div class="col-sm-12">
    @include('app.includes.header')
    <h2>Relatório</h2>
    <div class="row cards">
        <div class="col-md-3 mt-2">
            <a href="#" class="card card-link">
                <div class="card-body">
                    <h6 class="card-title">Colaboradores</h6>
                </div>
            </a>
        </div>
        <div class="col-md-3 mt-2">
            <a href="#" class="card card-link">
                <div class="card-body">
                    <h6 class="card-title">Pessoas</h6>
                </div>
            </a>
        </div>
        <div class="col-md-3 mt-2">
            <a href="#" class="card card-link">
                <div class="card-body">
                    <h6 class="card-title">Estoque</h6>
                </div>
            </a>
        </div>
        <div class="col-md-3 mt-2">
            <a href="#" class="card card-link">
                <div class="card-body">
                    <h6 class="card-title">Medicamentos recebidos</h6>
                </div>
            </a>
        </div>
        <div class="col-md-3 mt-2">
            <a href="#" class="card card-link">
                <div class="card-body">
                    <h6 class="card-title">Medicamentos encaminhados</h6>
                </div>
            </a>
        </div>
        <div class="col-md-3 mt-2">
            <a href="#" class="card card-link">
                <div class="card-body">
                    <h6 class="card-title">Medicamentos distribuídos</h6>
                </div>
            </a>
        </div>
    </div>
    
</div>
@endsection