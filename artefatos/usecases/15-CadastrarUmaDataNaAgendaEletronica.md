# Caso de uso NUM DO CASO DE USO - NOME DO CASO DE USO

## 1. Descrição
Este caso de uso se refere a funcionalidade de adiconar um evento a uma data na agenda eletrônica do sistema por parte dos usuários autenticados funcionários da Alemão Alinahmento
## 2. Atores
Funcionário da Alemão Alinhamento
## 3. Precondições


	1. O funcionário deve estar logado em sua conta de funcionário no sistema
 
## 4. Fluxo principal

    1. O caso de uso é iniciado quando o funcionário deseja adicionar um evento a uma data na agenda
	2. O funcionário escolhe o mês desejado
	3. O funcionário escolhe o dia desejado
	4. O funcionário escolhe um horário
	5. O funcionário adiciona as informações do agendamento
	6. O funcionário aperta o botão para completar o cadastro do agendamento
	7. O caso de uso é encerrado

## 5. Fluxos alternativos

### 5.1 Fluxo alternativo Mês anterior

| **Precondições**  | 1.O funcionário deve estar logado em sua conta de funcionário no sistema  |
| --- | --- |
|                   | 2.  |
| **Passos**        | 1. O funcionário escolhe um mês anterior ao da data atual |
|                   | 2. O funcionário escolhe o dia desejado |
|                   | 3. O funcionário escolhe um horário |
|                   | 4. O funcionário adiciona as informações do agendamento |
|                   | 5. O funcionário aperta o botão para completar o cadastro do agendamento |
|                   | 6. O caso de uso é encerrado |


### 5.2 Fluxo alternativo Dia anterior

| **Precondições**  | 1.O funcionário deve estar logado em sua conta de funcionário no sistema  |
| --- | --- |
|                   | 2.  |
| **Passos**        | 1. O funcionário escolhe um mês  |
|                   | 2. O funcionário escolhe o dia anterior ao da data atual|
|                   | 3. O funcionário escolhe um horário |
|                   | 4. O funcionário adiciona as informações do agendamento |
|                   | 5. O funcionário aperta o botão para completar o cadastro do agendamento |
|                   | 6. O caso de uso é encerrado |

### 5.3 Fluxo alternativo Horário indisponível

| **Precondições**  | 1.O funcionário deve estar logado em sua conta de funcionário no sistema  |
| --- | --- |
|                   | 2.  |
| **Passos**        | 1. O funcionário escolhe um mês  |
|                   | 2. O funcionário escolhe o dia |
|                   | 3. O funcionário escolhe um horário que já possui um evento associado ou fora do horário comercial |
|                   | 4. O funcionário adiciona as informações do agendamento |
|                   | 5. O funcionário aperta o botão para completar o cadastro do agendamento |
|                   | 6. O caso de uso é encerrado |
