@if(in_array(session('collaborator.role'), ['gestor_geral', 'gestor_estadual'], true))
    <a href="{{ route('unity.list') }}" class="btn btn-outline-success">{{ session('collaborator.corporate_name') }}</a>
@endif