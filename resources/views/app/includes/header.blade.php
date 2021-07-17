@if(!in_array(session('collaborator.role'), ['analista', 'assistente'], true))
    <a href="{{ route('unity.list') }}" class="btn btn-outline-success">{{ session('collaborator.corporate_name') }}</a>
@endif