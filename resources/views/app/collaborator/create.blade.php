@extends('template-app')

@section('content')
    <div class="col-sm-12">
        <button type="button" class="btn btn-outline-success">USB - Praia Grande - ES</button>
        <div class="col-12">
           
            <div class="card-body m-0 p-0">
                <h1>Colaborador</h1>
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
                                    <label class="form-control-label" for="input-cpf">CPF *</label>
                                    <input type="text" id="input-cpf" class="form-control" name="cpf" required>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-states">Estado *</label>
                                    <select class="form-control" id="input-states" name="states" required>
                                        <option value="ES">ES</option>
                                        <option value="RJ">RJ</option>
                                    </select>
                                </div>
                            </div>
  
                        </div>

                        <div class="row">

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Email *</label>
                                    <input type="text" id="input-email" class="form-control" name="email" required>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password">Senha *</label>
                                    <input type="password" id="input-password" class="form-control" name="password" required>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-profissional-record">Registro Profissional</label>
                                    <input type="password" id="input-profissional-record" class="form-control" name="profissional_record">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-role">Permissão *</label>
                                    <select class="form-control" id="input-role" name="role" required>
                                        <option>Gestor Geral</option>
                                        <option>Gestor Estadual</option>
                                        <option>Gestor de Unidade</option>
                                        <option>Analista</option>
                                        <option>Assistente</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="pl-lg-4">
                        <button class="btn btn-success" type="submit">Salvar</button>
                        <a class="btn btn-outline-danger" href="#">Voltar</a>
                    </div>
    
                </form>
            </div>
        </div>
    </div>
@endsection