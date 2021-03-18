# Caso de uso 9 - Adicionar Produto no Estoque

## 1. Descrição
Este caso de uso se refere à funcionalidade exclusiva do funcionário autenticado como funcionário na plataforma, e diz respeito à adicionar um produto no estoque de produtos do sistema.
## 2. Atores
Funcionário da Alemão Alinhamento.
## 3. Precondições


	1. O funcionário da Alemão Alinhamento deve estar logado em sua conta no sistema.
	
 
## 4. Fluxo principal

    1. O caso de uso se inicia quando um funcionário da Alemão Alinhamento deseja adicionar um novo produto no estoque eletrônico.
	2. O funcionário clica no botão adicionar produto
	3. O funcionário insere o nome do produto 
	4. O funcionário insere a quantidade deste produto que deseja adicionar
	5. O funcionário insere a descrição do produto
	6. O funcionário aperta o botão para enviar os dados inseridos ao estoque
	7. O caso de uso é encerrado

## 5. Fluxos alternativos

### 5.1 Fluxo alternativo 1 - Quantidade negativa

| **Precondições**  | 1. funcionário deve estar logado em sua conta no sistema  |
| --- | --- |
| **Passos**        | 1. O caso de uso se inicia quando um funcionário da Alemão Alinhamento deseja adicionar um novo produto no estoque eletrônico  |
|                   | 2.   O funcionário clica no botão adicionar produto |
|                   | 3.  O funcionário insere o nome do produto |
|                   | 4. O funcionário insere um número negativo na quantidade do produto |
|                   | 5. O funcionário insere a descrição do produto |
|                   | 6. O funcionário aperta o botão para enviar os dados inseridos ao estoque |
|                   | 7. Caso de uso é encerrado |

### 5.2 Fluxo alternativo 2 - Campo nome em branco

| **Precondições**  | 1. funcionário deve estar logado em sua conta no sistema  |
| --- | --- |
| **Passos**        | 1. O caso de uso se inicia quando um funcionário da Alemão Alinhamento deseja adicionar um novo produto no estoque eletrônico  |
|                   | 2.   O funcionário clica no botão adicionar produto |
|                   | 3.  O funcionário não insere o nome do produto |
|                   | 4. O funcionário insere a quantidade deste produto que deseja adicionar |
|                   | 5. O funcionário insere a descrição do produto |
|                   | 6.  O funcionário aperta o botão para enviar os dados inseridos ao estoque|
|                   | 7. Caso de uso é encerrado |

### 5.3 Fluxo alternativo 3 - Campo descrição em branco

| **Precondições**  | 1. funcionário deve estar logado em sua conta no sistema  |
| --- | --- |
| **Passos**        | 1. O caso de uso se inicia quando um funcionário da Alemão Alinhamento deseja adicionar um novo produto no estoque eletrônico  |
|                   | 2.   O funcionário clica no botão adicionar produto |
|                   | 3.  O funcionário insere o nome do produto |
|                   | 4. O funcionário insere a quantidade deste produto que deseja adicionar |
|                   | 5. O funcionário não insere o campo da descrição do produto |
|                   | 6.  O funcionário aperta o botão para enviar os dados inseridos ao estoque|
|                   | 7. Caso de uso é encerrado |
