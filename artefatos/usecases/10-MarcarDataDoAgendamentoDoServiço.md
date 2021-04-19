# Caso de uso 10 - MarcarDataDoAgendamentoDoServiço

## 1. Descrição
O usuário cliente será redirecionado ao Whatsapp da Alemão Alinhamento para agendar o serviço e o funcionário será responsável por deixar agendado o serviço na interface do calendário.
## 2. Atores
Usuário Cliente e Funcionário
## 3. Precondições


	1. O cliente já clicou em "Agendar Serviço" para ser direcionado ao Whatsapp da Alemão Alinhamento.
	2. O cliente já visitou a tela do calendário para visualizar os horários disponíveis.
	3. O funcionário já tem o conhecimento dos horários dos serviços agendados.
 
## 4. Fluxo principal

     1. O caso de Uso se inicia quando o cliente clica em "Agendar Serviço".
     2. O cliente é redirecionado para o Whatsapp da Alemão Alinhamento.
     3. O cliente agenda um horário para o serviço com o funcionário.
     4. O funcionário deixa agendado o serviço na página do Calendário.
     5. Caso de Uso encerrado.

## 5. Fluxos alternativos

### 5.1 Fluxo alternativo - Pedir para agendar um serviço indisponível

| **Precondições**  | 1. O cliente já visitou a tela do calendário para visualizar os horários disponíveis.  |
| --- | --- |
|  Passo 1  | O fluxo Alternativo se inicia quando o cliente clica em "Agendar Serviço". |
|  Passo 2  | O cliente não será redirecionado ao Whatsapp para agendar o serviço. |
|  Passo 3  | Fluxo Alternativo encerrado. |

### 5.2 Fluxo alternativo - Agendar o serviço do cliente no mesmo horário e data que outro serviço

| **Precondições**  | 1. O funcionário já tem o conhecimento dos horários dos serviços agendados.  |
| --- | --- |
|  Passo 1  | O fluxo Alternativo se inicia quando o funcionário vai agendar o serviço no calendário. |
|  Passo 2  | O funcionário agenda o serviço no mesmo horário e data que outro serviço e não consegue. |
|  Passo 3  | Fluxo Alternativo encerrado. |

