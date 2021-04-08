
# Caso de uso 19 - Confirmar Vendas

## 1. Descrição
Essa funcionalidade refere-se ao sistemas de compra do site, no qual após a confirmação de pagamento é realizada a confirmação da venda no sistema.

## 2. Atores
Usuário Cliente e Funcionário

## 3. Precondições

	1. Realizar o processo de Log In.
 
## 4. Fluxo principal

    1. O caso de Uso se inicia quando o cliente realiza o Log In.
    2. O cliente realiza o pagamento.
    3. O funcionário confirma o pagamento da venda no sistema.
    4. Caso de Uso encerrado.

## 5. Fluxos alternativos

### 5.1 Fluxo alternativo - Confirmar pagamento total de uma venda que obteve pagamento parcial

| **Precondições**  |1. Realizar o processo de Log In. |
| --- | --- |
|  Passo 1   | O fluxo Alternativo se inicia quando o cliente realiza o pagamento de apenas uma parte da venda total. |
|  Passo 2   | O funcionário confirma o pagamento da venda inteira. |
|  Passo 3   | Os produtos que não foram pagos são confirmados como vendidos. |
|  Passo 4   | Fluxo Alternativo encerrado. |

### 5.2 Fluxo alternativo - Confirmar o pagamento de apenas um produto da venda

| **Precondições**  |1. Realizar o processo de Log In |
| --- | --- |
|  Passo 1   | O fluxo Alternativo se inicia quando o cliente realiza o pagamento total da venda. |
|  Passo 2   | O funcionário confirma o pagamento de apenas um produto. |
|  Passo 3   | Os outros produtos pagos continuam no carrinho sem a venda confirmada. |
|  Passo 4   | Fluxo Alternativo encerrado. |
