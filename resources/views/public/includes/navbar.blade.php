<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <img class="img-fluid logo" src="{{ asset('img/logo.png')}}">

        <div class="navbar-nav">
            <a class="nav-link" href="{{ route('unity.location') }}">DOAR</a>
            <a class="nav-link" href="{{ route('unity.location') }}">RECEBER</a>
            <a class="nav-link" href="{{ route('unity.location') }}">UNIDADES</a>
            <a class="nav-link" href="#">CONSULTAR</a>
            <a class="nav-link" href="#">FAQ</a>
            <a href="{{ route('login.signIn') }}" type="button" class="btn btn-success fw-bold">Área do Colaborador</a>
          </div>
    </div>
</nav>