# Caso de uso 10 - Manter Agenda Eletronica

## 1. Descrição
Essa funcionalidade refere-se ao sistemas de organização do sistema sobre os serviços e retiradas de produtos já agendados pelo cliente, facilitando para os funcionarios visualizarem as reservas dos clientes.

## 2. Atores
Usuário Funcionario

## 3. Precondições

	1. Realizar o processo de Log In de funcionario.
 
## 4. Fluxo principal

    1. O caso de Uso se inicia quando o funcionario deseja consultar os horarios dos agendamentos dos clientes.
    2. O funcionario selecionara no header a aba de Agenda Eletronica
    3. O funcionario selecionara o dia, o mes e o ano que deseja observar os agendamentos no dia.
    4. Caso de Uso encerrado.

## 5. Fluxos alternativos

### 5.1 Fluxo alternativo - Cadastro do agendamento serviço
| *Precondições*  |1. Realizar o processo de Log In de funcionario / 2. Ter confirmado com o cliente por whatsapp |
| --- | --- |
|  Passo 1   | O fluxo Alternativo se inicia quando o funcionario deseja cadastrar um serviço em um agendamento na agenda |
|  Passo 2   | O funcionario seleciona o serviço no qual deseja cadastrar|
|  Passo 3   | O funcionario insere a hora combinada com o cliente e confirma|
|  Passo 4   | Fluxo Alternativo encerrado. |

### 5.2 Fluxo alternativo - Alterar data do agendamento

| *Precondições*  |	1. Realizar o processo de Log In de funcionario|
| --- | --- |
|  Passo 1   | O fluxo Alternativo se inicia quando o funcionario deseja alterar a data de um agendamento cadastrado|
|  Passo 2   | O funcionario seleciona a data desejada para alterar|
|  Passo 3   | O funcionario seleciona o agendamento que deseja alterar|
|  Passo 4   | O funcionario selecionara para qual data será alterada e confirma|
|  Passo 5   | Fluxo Alternativo encerrado. |

### 5.3 Fluxo alternativo - Excluir agendamento da data

| *Precondições*  | 1. Realizar o processo de Log In de funcionario |
| --- | --- |
|  Passo 1   | O fluxo Alternativo se inicia quando o funcionario deseja excluir do calendario um agendamentos cadastrados|
|  Passo 2   | O funcionario seleciona a data desejada para excluir o agendamento|
|  Passo 3   | O funcionario seleciona o agendamento que deseja excluir|
|  Passo 4   | O funcionario selecionara para excluir e confirma|
|  Passo 5   | Fluxo Alternativo encerrado. |

### 5.4 Fluxo alternativo - Alterar horario do agendamento

| *Precondições*  |1. Realizar o processo de Log In de funcionario |
| --- | --- |
|  Passo 1   | O fluxo Alternativo se inicia quando o funcionario deseja alterar o horario de um agendamento |
|  Passo 2   | O funcionario seleciona a data desejada para alterar o horario do agendamento|
|  Passo 3   | O funcionario seleciona o agendamento que deseja alterar o horario|
|  Passo 4   | O funcionario selecionara o horario para o qual deseja alterar e confirma|
|  Passo 5  | Fluxo Alternativo encerrado. |

### 5.5 Fluxo alternativo - Cadastrar incorretamente o agendamento do serviço

| *Precondições* | 1. Realizar o processo de Log In de funcionario / 2. Ter confirmado com o cliente por whatsapp |
| --- | --- |
|  Passo 1   | O fluxo Alternativo se inicia quando o funcionario deseja cadastrar um serviço em um agendamento na agenda |
|  Passo 2   | O funcionario seleciona o serviço no qual deseja cadastrar|
|  Passo 3   | O funcionario insere a hora incorretamente que tinha sido combinada com o cliente e confirma|
| Passo 4| O site percebe o erro e informa ao funcionario, o impedindo de prosseguir com o cadastro|
|  Passo 5   | Fluxo Alternativo encerrado. |
