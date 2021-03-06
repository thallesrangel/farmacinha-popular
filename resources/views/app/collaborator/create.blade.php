@extends('template-app')

@section('content')
    <div class="col-sm-12">
        <button type="button" class="btn btn-outline-success">USB - Praia Grande - ES</button>
        <div class="col-12">
           
            <div class="card-body m-0 p-0">
                <h2>Colaborador</h2>
                <form action="{{ route('collaborator.store') }}" method="POST" autocomplete="off">
                    @csrf
                    <h6 class="heading-small text-muted mt-3">Informações gerais</h6>
                    <div class="pl-lg-4">
                        <div class="row">
    
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">Nome *</label>
                                    <input type="text" id="input-first-name" class="form-control" name="first_name" required>
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">Sobrenome *</label>
                                    <input type="text" id="input-last-name" class="form-control" name="last_name" required>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-cpf">CPF *</label>
                                    <input type="text" id="input-cpf" class="form-control cpf" name="cpf" required>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-birth-date">Data de Nascimento *</label>
                                    <input type="date" id="input-birth-date" class="form-control" name="birth_date" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Email *</label>
                                    <input type="text" id="input-email" class="form-control" name="email" required>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password">Senha *</label>
                                    <input type="password" id="input-password" class="form-control" name="password" required>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-professional-record">Registro Profissional</label>
                                    <input type="text" id="input-professional-record" class="form-control" name="professional_record">
                                </div>
                            </div>
                        </div>

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

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-role">Permissão *</label>
                                    <select class="form-control" id="input-role" name="role" required>
                                        @foreach($roles as $key =>  $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pl-lg-4">
                        <button class="btn btn-success" type="submit">Salvar</button>
                        <a class="btn btn-outline-danger" href="{{ route('collaborator.list') }}">Voltar</a>
                    </div>
    
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('/js/selectCity.js') }}"></script>
@endsection