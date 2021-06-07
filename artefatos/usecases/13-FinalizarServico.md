# Caso de Uso 13 - Finalizar Serviço

## 1. Descrição
Essa funcionalidade refere-se a finalização dos processos de prestação de serviços.

## 2. Atores
Usuário Funcionário.

## 3. Precondições

	1. Realizar Log In como funcionário.
	2. Possuir no mínimo um serviço agendado.
 
## 4. Fluxo principal

    1. O caso de uso se inicia quando o funcionário deseja consultar serviços pendentes.
    2. O funcionário filtrará entre os serviços agendados, aqueles que ainda estão em aberto.
    3. O funcionário seleciona o serviço que deseja finalizar.
    4. O funcionário fecha o serviço desejado.
    5. Caso de Uso encerrado.

## 5. Fluxos alternativos

### 5.1 Fluxo alternativo - Consultar Serviços Finalizados


| Precondições  |1. Ter realizado o Log In como funcionário 	2. Possuir no mínimo um serviço agendado.|
| --- | --- |
|  Passo 1   | O fluxo Alternativo se inicia quando o funcionario deseja consultar os serviços finalizados. |
|  Passo 2   | O funcionário filtrará entre os serviços agendados, aqueles que já foram finalizados.|
|  Passo 3  | Fluxo Alternativo encerrado. |


### 5.2 Fluxo alternativo - Finalizar serviço por meio da Agenda


| Precondições  |1. Ter realizado o Log In como funcionário 	2. Possuir no mínimo um serviço agendado.|
| --- | --- |
|  Passo 1   | O fluxo Alternativo se inicia quando o funcionario desejar finalizar algum serviço em aberto |
|  Passo 2   | O funcionário busca na agenda a data do serviço que deseja finalizar.|
|  Passo 3   | O funcionário clica no serviço que deseja finalizar.|
|  Passo 4   | O funcionário é redirecionado para a página de manter o agendamento|
|  Passo 5  | O funcionário aperta o botão de fechar o serviço|
|  Passo 6  | Fluxo Alternativo encerrado. |
