@extends('template-public')

@section('content')
    @include('public.includes.navbar')

    <div class="container mb-5 bg text-center">
        <h4 class="fw-bold">Consultar unidade mais próxima</h4>
        <h5>Saiba onde doar e quais medicamentos a unidade disponibiliza</h5>
        <form action="{{ route('unity.search') }}" method="POST" autocomplete="off">
            @csrf
            <div class="row d-flex justify-content-center">
                
                <div class="col-sm-12 col-md-3 m-2">
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

                <div class="col-sm-12 col-md-3 m-2">
                    <div class="form-group">
                        <label class="form-control-label" for="input-city">Cidade *</label>
                        <select id="city" class="form-control" id="input-city" name="city_id" required>
                        </select>
                        <p class="txt-red">{{ $errors->first('city_id') }}</p>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-3 text-center">
                        <button class="btn btn-success" type="submit">Buscar</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
    
    <div class="container">
        <div class="row">
            @foreach($unity as $item)
                <div class="col-md-4">
                    <div class="card m-2">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->corporate_name }}</h5>
                        <p class="card-text">{{ $item->city->name }} . {{ $item->states->abbreviation }}</p>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="{{ asset('/js/selectCity.js') }}"></script>
@endsection