<div class="div-logo mt-2">
    <img class="img-fluid logo-dashboard" src="{{ asset('img/logo.png')}}">
</div>
<ul class="flex-column nav pl-4">
    <li class="nav-item">
        <a class="nav-link p-1" href="{{ route('dashboard') }}">
            <i class="bi bi-house"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link p-1" href="{{ route('drugin.list') }}">
            <i class="bi bi-box-seam"></i>
            <span>Medicamentos</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link p-1" href="{{ route('druganalyze.list') }}">
            <i class="bi bi-clipboard-check"></i>
            <span>Analisados</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link p-1" href="#">
            <i class="bi bi-archive"></i>
            <span>Estoque</span> 
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link p-1" href="{{ route('people.list') }}">
            <i class="bi bi-people"></i>
            <span>Pessoas</span> 
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link p-1" href="{{ route('report.index') }}">
            <i class="bi bi-clipboard"></i>
            <span>Relatórios</span> 
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link p-1" href="{{ route('collaborator.list') }}">
            <i class="bi bi-briefcase"></i>
            <span>Colaboradores</span> 
        </a>
    </li>

    @if(in_array(session('collaborator.role'), ['gestor_geral', 'gestor_estadual'], true))
        <li class="nav-item">
            <a class="nav-link p-1" href="{{ route('unity.list') }}">
                <i class="bi bi-building"></i>
                <span>Unidade</span> 
            </a>
        </li>
    @endif
</ul>

<ul class="flex-column nav pl-4 mt-5">
    <li class="nav-item">
        <a class="nav-link p-1" href="{{ route('collaborator.profile', session('collaborator.id')) }}">
            <i class="bi bi-person"></i>
            <span>Perfil</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link p-1" href="{{ route('login.logout') }}">
            <i class="bi bi-box-arrow-right"></i>
            <span>Logout</span> 
        </a>
    </li>

</ul>
