@extends('template-app')

@section('content')
    <div class="col-sm-12">
        @include('app.includes.header')
        <div class="col-12">
            <div class="card-body m-0 p-0">
                <h1>Receber medicamento</h1>
                <form action="" method="POST" autocomplete="off">
                    @csrf
                    <h6 class="heading-small text-muted mt-3">Informações gerais</h6>
                    <div class="pl-lg-4">
                        <div class="row">
    
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">Nome *</label>
                                    <input type="text" id="input-name" class="form-control" name="name" required>
                                    <p class="text-red">{{ $errors->first('name') }}</p>
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-stripe">Tarja *</label>
                                    <select class="form-control" id="input-stripe" name="id_stripe" required>
                                        @foreach($stripe as $item)
                                            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                        @endforeach
                                    </select>
                                    <p class="txt-red">{{ $errors->first('id_stripe') }}</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-laboratory">Laboratório *</label>
                                    <select class="form-control" id="input-laboratory" name="id_laboratory" required>
                                        <option value="">Selecione um laboratório</option>
                                        @foreach($laboratory as $item)
                                            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                        @endforeach
                                    </select>
                                    <p class="txt-red">{{ $errors->first('id_laboratory') }}</p>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-expiration-date">Data de Validade *</label>
                                    <input type="date" id="input-expiration-date" class="form-control" name="expiration_date" required>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-measurement">Medição *</label>
                                    <select class="form-control" id="input-measurement" name="id_measurement" required>
                                        @foreach($measurement as $item)
                                            <option value="{{ $item['id'] }}">{{ $item['abbreviation'] }}</option>
                                        @endforeach
                                    </select>
                                    <p class="txt-red">{{ $errors->first('id_measurement') }}</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection