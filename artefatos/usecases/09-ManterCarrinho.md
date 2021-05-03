# Caso de uso 09 - Manter Carrinho de Compras

## 1. Descrição
Essa funcionalidade refere-se ao sistemas de compra do site. Escolha um ou mais produtos para reservar a compra.

## 2. Atores
Usuário Cliente

## 3. Precondições

	1. Realizar o processo de Log In.
 
## 4. Fluxo principal

    1. O caso de Uso se inicia quando o cliente realiza o Log In.
    2. O cliente ao selecionar o produto desejado o adiciona ao seu carrinho.
    3. O cliente clicará em reservar compra.
    4. Caso de Uso encerrado.

## 5. Fluxos alternativos

### 5.1 Fluxo alternativo - Alterar Quantidade de Produtos no Carrinho

| *Precondições*  |1. Ter realizado o Log In e ja ter adicionado algum produto ao carrinho|
| --- | --- |
|  Passo 1   | O fluxo Alternativo se inicia quando o cliente entra na tela de carrinho. |
|  Passo 2   | O cliente seleciona o produto desejado |
|  Passo 3   | O cliente clica se deseja aumentar a quantidade do mesmo produto, ou diminuir a quantidade|
|  Passo 4   | Fluxo Alternativo encerrado. |

### 5.2 Fluxo alternativo - Adicionar um novo produto ao carrinho

| *Precondições*  |1. Ter realizado o Log In |
| --- | --- |
|  Passo 1   | O fluxo Alternativo se inicia quando o cliente adiciona seu primeiro produto no carrinho. |
|  Passo 2   | O cliente volta a tela de produto |
|  Passo 3   | O cliente entao seleciona o produto desejado |
|  Passo 4   | O cliente clica em adicionar ao carrinho o novo produto|
|  Passo 5   | Fluxo Alternativo encerrado. |

### 5.3 Fluxo alternativo - Excluir Produto do carrinho

| *Precondições*  |1. Ter realizado o Log In e ja ter adicionado algum produto ao carrinho |
| --- | --- |
|  Passo 1   | O fluxo Alternativo se inicia quando o cliente entra na tela de carrinho. |
|  Passo 2   | O cliente seleciona o produto no qual deseja excluir|
|  Passo 3   |O cliente então clica no botão de excluir|
|  Passo 4   | Fluxo Alternativo encerrado. |

### 5.4 Fluxo alternativo - Cliente adicionou mais produtos do que disponivel no estoque

| *Precondições*  |1. Ter realizado o Log In e ja ter adicionado algum produto ao carrinho |
| --- | --- |
|  Passo 1   | O fluxo Alternativo se inicia quando o cliente entra na tela de produtos |
|  Passo 2   | O cliente seleciona o produto no qual deseja adicionar|
|  Passo 3   | O site barra a adição e impede o cliente de adicionar tal produto ao seu carrinho|
|  Passo 4   | Fluxo Alternativo encerrado. |
