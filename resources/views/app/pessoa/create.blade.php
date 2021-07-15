@extends('template-app')

@section('content')
    <div class="col-sm-12">
        <button type="button" class="btn btn-outline-success">USB - Praia Grande - ES</button>
        <div class="col-12">
           
            <div class="card-body m-0 p-0">
                <h1>Pessoas</h1>
                <form action="" method="POST">
                    <h6 class="heading-small text-muted mt-3">Informações gerais</h6>
                    <div class="pl-lg-4">
                        <div class="row">
    
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-nome">Nome *</label>
                                    <input type="text" id="input-nome" class="form-control" name="nome" required>
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-sobrenome">Sobrenome *</label>
                                    <input type="text" id="input-sobrenome" class="form-control" name="sobrenome" required>
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-nome-social">Nome Social</label>
                                    <input type="text" id="input-nome-social" class="form-control" name="nome_social">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-sexo">Sexo *</label>
                                    <select class="form-control" id="input-sexo" name="sexo" required>
                                        <option>Masculino</option>
                                        <option>Feminino</option>
                                        <option>Não informado</option>
                                    </select>
                                </div>
                            </div>
  
                        </div>

                        <div class="row">

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-nascimento">Data de Nascimento *</label>
                                    <input type="date" id="input-nascimento" class="form-control" name="data_nascimento" required>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-cpf">CPF *</label>
                                    <input type="text" id="input-cpf" class="form-control" name="cpf" required>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-sus">SUS</label>
                                    <input type="text" id="input-sus" class="form-control" name="sus" required>
                                </div>
                            </div>

                        </div>
                    </div>
    
                    <h6 class="heading-small text-muted mb-2 mt-3">Endereço</h6>
                    <div class="pl-lg-4">
                       
                        <div class="row">

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-estado">Estado *</label>
                                    <select class="form-control" id="input-estado" name="estado" required>
                                        <option>ES</option>
                                        <option>RJ</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-cidade">Cidade *</label>
                                    <select class="form-control" id="input-cidade" name="cidade" required>
                                        <option>Fundão</option>
                                        <option>Serra</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-bairro">Bairro</label>
                                    <input type="text" id="input-bairro" class="form-control" name="bairro">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-logradouro">Logradouro</label>
                                    <input type="text" id="input-logradouro" class="form-control" name="logradouro" required>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-complemento">Complemento</label>
                                    <input type="text" id="input-complemento" class="form-control" name="complemento">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-numero">Número</label>
                                    <input type="text" id="input-numero" class="form-control" name="numero">
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-success" type="submit">Salvar</button>
                        <a class="btn btn-outline-danger" href="">Voltar</a>
                    </div>
    
                </form>
            </div>
    
    </div>
    </div>
@endsection