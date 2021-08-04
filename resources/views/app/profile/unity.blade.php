@extends('template-public')

@section('content')
<div class="container div-cadastro">
    <div class="card">

        <div class="card-body">
            <img class="img-fluid logo-dashboard" src="{{ asset('img/logo.png')}}">
            <h4 class="mt-3 mb-2">Perfil da Unidade</h4>

                <div>
                    <h6 class="heading-small text-muted mt-4">Informações Gerais</h6>
                    <div class="row p-2">
                        <div class="col-md-6">
                            <h6 class="fw-bold">Nome</h6>
                            <p>{{ $unity->corporate_name }}</p>
                        </div>

                        <div class="col-md-6">
                            <h6 class="fw-bold">CNES</h6>
                            <p>{{ $unity->cnes }}</p>
                        </div>
                    </div>

                    <h6 class="heading-small text-muted mt-4">Localização</h6>
                    <div class="row p-2">
                        <div class="col-md-6">
                            <h6 class="fw-bold">Estado</h6>
                            <p>{{ $unity->states->name }}</p>
                        </div>

                        <div class="col-md-6">
                            <h6 class="fw-bold">Cidade</h6>
                            <p>{{ $unity->city->name }}</p>
                        </div>
                    </div>

                    <div class="col-12 mt-3 text-center">
                        <a href="{{ route('unity.list') }}" class="btn btn-outline-success">Voltar para listagem</a>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
