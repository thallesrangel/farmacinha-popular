@extends('template-app')

@section('content')
    <div class="col-sm-12">
        @include('app.includes.header')
        <h2>Perfil do Colaborador</h2>
    </div>
    <div class="col-sm-12">
    <h3 class="text-center">{{ session('collaborator.first_name') }}</h3>
    </div>
@endsection