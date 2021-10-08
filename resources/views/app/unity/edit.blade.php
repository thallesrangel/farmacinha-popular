@extends('template-public')

@section('content')

    <div class="container div-cadastro">
        <div class="card">
    
            <div class="card-body">
                <img class="img-fluid logo-dashboard" src="{{ asset('img/logo.png')}}">
                <h4 class="mt-3 mb-2">Editar Unidade</h4>
                <a href="http://cnes.datasus.gov.br/pages/estabelecimentos/consulta.jsp" target="_blank">Consultar CNES - Cadastro Nacional de Estabelecimentos de Saúde</a>
                <form action="{{ route('unity.update', [ 'id' => $data->id ]) }}" method="POST">
                    {{ method_field('PUT') }}
                    @csrf
                    <div>
                        <div class="row">

                            <input type="hidden" id="city-data" name="city_data" value="{{ $data->city_id }}">

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-corporate-name">Nome da Unidade *</label>
                                    <input type="text" id="input-corporate-name" class="form-control" name="corporate_name" placeholder="Ex: UBS Praia Grande" value="{{ $data->corporate_name}}" required>
                                    <p class="text-red">{{ $errors->first('corporate_name') }}</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-cnes">CNES *</label>
                                    <input type="text" id="input-cnes" class="form-control" name="cnes"  value="{{ $data->cnes}}" required>
                                    <p class="text-red">{{ $errors->first('cnes') }}</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-states">Estado *</label>
                                    <select class="form-control" id="input-states" name="state_id" required>
                                        <option value="">Selecione um estado</option>
                                        @foreach($states as $item)
                                            <option value="{{ $item['id'] }}" @if ($data->state_id === $item['id']) {{ 'selected';}} @endif>{{ $item['name'] }}</option>
                                        @endforeach
                                    </select>
                                    <p class="txt-red">{{ $errors->first('states') }}</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-city">Cidade *</label>
                                    <select id="city" class="form-control" id="input-city" name="city_id" required></select>
                                    <p class="txt-red">{{ $errors->first('city') }}</p>
                                </div>
                            </div>

                            <div class="col-12 mt-3 text-center">
                                <button type="submit" class="btn btn-success">Salvar</button>
                                <a href="{{ route('unity.list') }}" class="btn btn-outline-danger">Voltar</a>
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('/js/selectCity.js') }}"></script>
@endsection