@extends('template-public')

@section('content')

    <div class="container div-cadastro">
        <div class="card">
    
            <div class="card-body">
                <img class="img-fluid logo-dashboard" src="{{ asset('img/logo.png')}}">
                <h4 class="mt-3 mb-2">Cadastro de Unidade</h4>
                <form action="{{ route('unity.store') }}" method="POST" autocomplete="off">
                    @csrf
                    <div>
                        <div class="row">

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-corporate-name">Nome da Unidade *</label>
                                    <input type="text" id="input-corporate-name" class="form-control" name="corporate_name" placeholder="Ex: UBS Praia Grande" required>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-cnes">CNES *</label>
                                    <input type="text" id="input-cnes" class="form-control" name="cnes" required>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-states">Estado *</label>
                                    <select class="form-control" id="input-states" name="states" onchange="selectCity(this)" required>
                                        <option value="">Selecione um estado</option>
                                        @foreach($states as $item)
                                            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-city">Cidade *</label>
                                    <select id="city" class="form-control" id="input-city" name="city" required></select>
                                </div>
                            </div>

                            <div class="col-12 mt-3 text-center">
                                <button type="submit" class="btn btn-success">Tudo pronto!</button>
                                <a href="{{ route('unity.list') }}" class="btn btn-outline-success">Voltar</a>
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('/js/selectCity.js') }}"></script>
@endsection
