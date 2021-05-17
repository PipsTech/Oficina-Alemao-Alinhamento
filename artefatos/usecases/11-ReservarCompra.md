# Caso de Uso 11 - Reservar Compra

## 1. Descrição
Essa funcionalidade refere-se ao sistema de finalizar a compra do site.

## 2. Atores
Usuário Cliente

## 3. Precondições

	1. Realizar o processo de Log In.
	2. Possuir no mínimo um porduto no seu carrinho de compras
 
## 4. Fluxo principal

    1. O caso de Uso se inicia quando o cliente realiza o Log In.
    2. O cliente ao selecionar o produto desejado o adiciona ao seu carrinho.
    3. O cliente clicará em reservar compra.
    4. O cliente preencherá a data e o horário para busca do produto.
    5. O cliente informará a forma de pagamento: dinheiro, cartão ou PIX.
    6. Caso de Uso encerrado.

## 5. Fluxos alternativos

### 5.1 Fluxo alternativo - Preencher a Data incorretamente

| Precondições  |1. Ter realizado o Log In e ja ter adicionado algum produto ao carrinho|
| --- | --- |
|  Passo 1   | O fluxo Alternativo se inicia quando o cliente entra na tela de carrinho. |
|  Passo 2   | O cliente seleciona o produto desejado. |
|  Passo 3   | O cliente clica em Reservar Compra e irá preencher incorretamente o espaço da data.|
| Passo 4 | O site impedirá a finalização da compra|
|  Passo 5   | Fluxo Alternativo encerrado. |
