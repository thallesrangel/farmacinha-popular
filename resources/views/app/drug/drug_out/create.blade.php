@extends('template-app')

@section('content')
    <div class="col-sm-12">
        @include('app.includes.header')
        <div class="col-12">
            <div class="card-body m-0 p-0">
                <h1>Distribuir Medicamento</h1>
                <form action="{{ route('drugout.store') }}" method="POST" autocomplete="off">
                    @csrf
                    <input type="hidden" name="id_drug_in" value="{{ request()->id }}">
                    <h6 class="heading-small text-muted mt-3">Informações do medicamento</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-2">
                                <h6 class="fw-bold">ID</h6>
                                <p>{{ $drug->id }}</p>
                            </div>
        
                            <div class="col-md-3">
                                <h6 class="fw-bold">Medicamento</h6>
                                <p>{{ $drug->name }}</p>
                            </div>

                            <div class="col-md-3">
                                <h6 class="fw-bold">Classificação</h6>
                                <p>{{ $drug->drugType->name }}</p>
                            </div>

                            <div class="col-md-4">
                                <h6 class="fw-bold">Disponível</h6>
                                <p> <span class="amount"> {{ $drug->amount }} </span> {{ $drug->measurement->abbreviation }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-receiver">Receptor *</label>
                                    <select class="form-control" id="input-receiver" name="id_people_receiver" required>
                                        <option value="">Selecione uma pessoa</option>
                                        @foreach($people as $item)
                                            <option value="{{ $item['id'] }}">{{ $item['first_name'] }}</option>
                                        @endforeach
                                    </select>
                                    <p class="txt-red">{{ $errors->first('id_people_receiver') }}</p>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-amount">Quantidade *</label>
                                    <input type="text" id="input-amount" class="form-control amount" name="quantity_out" required>
                                    <p class="txt-red">{{ $errors->first('quantity_out') }}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">Receituário Médico</label>
                                    <input class="form-control" type="file" id="formFile" name="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pl-lg-4">
                        <button class="btn btn-success" type="submit">Salvar</button>
                        <a class="btn btn-outline-danger" href="{{ route('drugavailable.list') }}">Voltar</a>
                    </div>  
                </form>
            </div>
        </div>
    </div>
@endsection