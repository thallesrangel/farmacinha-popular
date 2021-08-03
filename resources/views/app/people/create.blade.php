@extends('template-app')

@section('content')
    <div class="col-sm-12">
        <button type="button" class="btn btn-outline-success">USB - Praia Grande - ES</button>
        <div class="col-12">
           
            <div class="card-body m-0 p-0">
                <h1>Pessoas</h1>
                <form action="{{ route('people.store') }}" method="POST" autocomplete="off">
                    @csrf
                    <h6 class="heading-small text-muted mt-3">Informações gerais</h6>
                    <div class="pl-lg-4">
                        <div class="row">
    
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-nome">Nome *</label>
                                    <input type="text" id="input-nome" class="form-control" name="first_name" required>
                                    <p class="text-red">{{ $errors->first('first_name') }}</p>
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-sobrenome">Sobrenome *</label>
                                    <input type="text" id="input-sobrenome" class="form-control" name="last_name" required>
                                    <p class="text-red">{{ $errors->first('last_name') }}</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-nome-social">Nome Social</label>
                                    <input type="text" id="input-nome-social" class="form-control" name="social_name" placeholder="Se preenchido, será exibido ao invés do nome">
                                </div>
                            </div>
  
                        </div>

                        <div class="row">

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-sex">Sexo *</label>
                                    <select class="form-control" id="input-sex" name="sex" required>
                                        <option value="m">Masculino</option>
                                        <option value="f">Feminino</option>
                                        <option value="nda">Não informado</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-birth-date">Data de Nascimento *</label>
                                    <input type="date" id="input-birth-date" class="form-control" name="birth_date" required>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-cpf">CPF *</label>
                                    <input type="text" id="input-cpf" class="form-control cpf" name="cpf" required>
                                    <p class="text-red">{{ $errors->first('cpf') }}</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-sus">SUS</label>
                                    <input type="text" id="input-sus" class="form-control" name="sus">
                                    <p class="text-red">{{ $errors->first('sus') }}</p>
                                </div>
                            </div>

                        </div>
                    </div>
    
                    <h6 class="heading-small text-muted mb-2 mt-3">Endereço</h6>
                    <div class="pl-lg-4">
                       
                        <div class="row">

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-states">Estado *</label>
                                    <select class="form-control" id="input-states" name="state_id" required>
                                        <option value="">Selecione um estado</option>
                                        @foreach($states as $item)
                                            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                        @endforeach
                                    </select>
                                    <p class="txt-red">{{ $errors->first('state_id') }}</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-city">Cidade *</label>
                                    <select id="city" class="form-control" id="input-city" name="city_id" required>
                                    </select>
                                    <p class="txt-red">{{ $errors->first('city_id') }}</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-district">Bairro</label>
                                    <input type="text" id="input-district" class="form-control" name="district">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-address-place">Logradouro</label>
                                    <input type="text" id="input-address-place" class="form-control" name="address_place">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-complement">Complemento</label>
                                    <input type="text" id="input-complement" class="form-control" name="complement">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-number">Número</label>
                                    <input type="text" id="input-number" class="form-control" name="number">
                                </div>
                            </div>

                        </div>

                        <button class="btn btn-success" type="submit">Salvar</button>
                        <a class="btn btn-outline-danger" href="{{ route('people.list') }}">Voltar</a>
                    </div>
    
                </form>
            </div>
    
    </div>
    </div>
    <script src="{{ asset('/js/selectCity.js') }}"></script>
@endsection