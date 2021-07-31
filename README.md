# TCC - Bacharel em Sistemas de Informação

## Descrição Geral
O objetivo do software é gerenciar, analisar e disponibilizar medicamentos doados, respeitando todo fluxo da aplicação proporcionando rastreabilidade.

Antes de explar o fluxo comum, é necessário: 
 - Registrar uma unidade, através do colaborador com role - Gestor Estadual;
 - Registrar outros colaboradores, com permissões compatíveis a sua função;
 - Registrar pessoas, que serão a comunidade, doadores e receptores, com apresentação dos documentos.

O software possui entrada, estoque e saída de medicamentos:
- Entrada: 
        com um usuário registrado, apresenta o medicamento a unidade, um colaborador irá realizar a captação o registro.
- Análise: 
        O usuário com role Analista é responsável pela análise, onde serão observados o estado de conservação, data de validade, entre outros.
- Estoque:
        Medicamentos que passaram pelas etapas anteriores e aprovado pelo Analista, é disponíbilizado tanto para a comunidade local, quanto para comunidade nacional, visto que é possível, em uma outra unidade, um requerente solicitar um determinado medicamento em falta, que em outra unidade encontra-se disponível.
- Saída:
        Mediante registro, no ato da solicitação, deve-se apresentar um receituário médico para requerer uma medicação, sendo disponibilizada caso disponível em estoque ou solicitada a outra unidade, sendo entregue assim um protocolo de rastreamento.

## Roles
 - Gestor Geral : Registra Gestor Estadual, tem acesso admin, acesso unidades e tem como acessar contas de colaboradores

 - Gestor Estadual : Registra Unidade conforme seu state, adiciona novos colaboradores e pessoas a sua unidade

 - Gestor de Unidade : Registra colaboradores e pessoas a unidade definida

 - Analista : Recebe, analisa e distribui medicamentos, registra pessoas em sua unidade

 - Assistente: Recebe, distribui medicamentos, registra pessoas em sua unidade


## Requisitos

*Tela Selecionar Unidade*:
Exibir apenas todos, pois podem mudar de unidade...

*Gestor Estadual*
Deve apenas registrar unidades em seu Estado.


*Midlleware só acessa dashboard e outros caso tenha selecionado uma unidade*


Gestor Geral e Gestor de Estado -> não pode ter id_unity no registro(DB)
