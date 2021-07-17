

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
