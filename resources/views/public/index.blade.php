@extends('template-public')

@section('content')

    @include('public.includes.navbar')

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h1 class="fw-bold"><span id="salve-vidas">Salve vidas.</span> <br> Doe e receber medicamentos<br> gratuitamente com qualidade</h1>
                <a class="btn btn-success m-2 fw-bold" href="#">Doar</a>
                <a class="btn btn-outline-success m-2 fw-bold" href="#">Receber</a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img class="img-fluid" src="{{ asset('img/medical.png')}}">
            </div>
        </div>
    </div>

    <div class="container text-center">
        <h3 class="fw-bold">Reduzindo o disperdício e promovendo acesso</h3>
        <h5>Com sua doação, qualquer usuário poderá ter acesso a inúmeros medicamentos</h5>
    </div>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <i class="bi bi-heart bi-yellow"></i>
                      <h5 class="card-title fw-bold">Saúde</h5>
                      <p class="card-text">Sua doacao salva e proporciona melhor qualidade de vida para nós, brasileiros</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <i class="bi bi-star bi-yellow"></i>
                        <h5 class="card-title fw-bold">Qualidade</h5>
                        <p class="card-text">Todos os medicamentos sao rigorosamente avaliados por profissionais</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <i class="bi bi-arrow-repeat bi-yellow"></i>
                        <h5 class="card-title fw-bold">Acesso</h5>
                        <p class="card-text">Doando, reduz o desperdício e proporciona acesso a medicamentos antes custosos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <h4 class="fw-bold">Consultar unidade mais próxima</h4>
        <h5>Saiba quais medicamentos a unidade disponibiliza</h5>
        <div class="d-flex justify-content-center bg-gray-search">
            <form class="d-flex col-md-4 col-sm-10">
                <input class="form-control me-2" type="search" placeholder="Localização">
                <button class="btn btn btn-default" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </div>

    <div class="container mb-5">
        <h4 class="fw-bold">Consultar solicitação</h4>
        <h5>Acompanhe seu processo</h5>
        <div class="d-flex justify-content-center bg-gray-search">
            <form class="d-flex col-md-4 col-sm-10">
                <input class="form-control me-2" type="search" placeholder="Número de protocolo" >
                <button class="btn btn btn-default" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </div>

    <div class="container">
        <h3 class="fw-bold text-center">FAQ - Perguntas Frequentes</h3>
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 col-sm-12">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Os remédios sao gratuitos?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Todos medicamentos são gratuitos.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Preciso de receita?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
