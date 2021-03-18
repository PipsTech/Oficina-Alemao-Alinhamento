# Caso de uso 14 - Cadastrar Anúncio de Produto

## 1. Descrição
	Este caso de uso se refere a funcionalidade exclusiva dos usuários do tipo funcionário de realizar a postagem dos anúncios dos produtos no sistema
## 2. Atores
	Funcionário da Alemão Alinhamento
## 3. Precondições


	1. O funcionário da Alemão Alinhamento deve estar logado em sua conta no sistema
## 4. Fluxo principal

    1.O caso de uso é iniciado quando um funcionário da Alemão Alinhamento deseja cadastrar um anúncio 
	2. O funcionário insere o título do anúncio
	3. O funcionário insere a descrição do anúncio
	4. O funcionário insere o preço do produto anunciado
	5. O funcionário insere a quantidade que deseja anunciar
	6. O funcionário aperta o botão para enviar o aúncio
	7. O caso de uso é encerrado 

## 5. Fluxos alternativos

### 5.1 Fluxo alternativo 1 - Quantidade negativa

| **Precondições**  | 1. funcionário deve estar logado em sua conta no sistema  |
| --- | --- |
| **Passos**        | 1. O caso de uso é iniciado quando um funcionário da Alemão Alinhamento deseja cadastrar um anúncio   |
|                   | 2.  O funcionário insere o nome do anúncio produto |
|                   | 3. O funcionário insere um número negativo na quantidade do produto |
|                   | 4. O funcionário insere a descrição do anúncio produto |
|                   | 5. O funcionário adiciona preço do produto anunciado |
|                   | 6. O funcionário aperta o botão para enviar o aúncio |
|                   | 7. Envio não pode ser concluído |
|                   | 8. Caso de uso é encerrado |

### 5.2 Fluxo alternativo 2 - Campo nome em branco

| **Precondições**  | 1. funcionário deve estar logado em sua conta no sistema  |
| --- | --- |
| **Passos**        |1. O caso de uso é iniciado quando um funcionário da Alemão Alinhamento deseja cadastrar um anúncio   |
|                   | 2.  O funcionário não insere o nome do título do aúncio do produto |
|                   | 3. O funcionário insere a quantidade deste produto que deseja adicionar |
|                   | 4. O funcionário insere a descrição do anúncio produto |
|                   | 5.  O funcionário adiciona o preço do produto anunciado|
|                   | 7. O funcionário aperta o botão para enviar o aúncio |
|                   | 8. Envio não pode ser concluído |
|                   | 9. Caso de uso é encerrado |

### 5.3 Fluxo alternativo 3 - Campo descrição em branco

| **Precondições**  | 1. funcionário deve estar logado em sua conta no sistema  |
| --- | --- |
| **Passos**        |1. O caso de uso é iniciado quando um funcionário da Alemão Alinhamento deseja cadastrar um anúncio   |
|                   | 2.  O funcionário insere o nome do título do aúncio do produto |
|                   | 3. O funcionário insere a quantidade deste produto que deseja adicionar |
|                   | 4. O funcionário não insere a descrição do anúncio produto |
|                   | 5.  O funcionário adiciona o preço do produto anunciado|
|                   | 7. O funcionário aperta o botão para enviar o aúncio |
|                   | 8. Envio não pode ser concluído |
|                   | 9. Caso de uso é encerrado |

### 5.4 Fluxo alternativo 4 - Campo preço negativo

| **Precondições**  | 1. funcionário deve estar logado em sua conta no sistema  |
| --- | --- |
| **Passos**        |1. O caso de uso é iniciado quando um funcionário da Alemão Alinhamento deseja cadastrar um anúncio   |
|                   | 2.  O funcionário insere o nome do título do aúncio do produto |
|                   | 3. O funcionário insere a quantidade deste produto que deseja adicionar |
|                   | 4. O funcionário insere a descrição do anúncio produto |
|                   | 5.  O funcionário adiciona um preço negativo para o produto anunciado|
|                   | 7. O funcionário aperta o botão para enviar o aúncio |
|                   | 8. Envio não pode ser concluído |
|                   | 9. Caso de uso é encerrado |

### 5.5 Fluxo alternativo 5 - Campo preço em branco

| **Precondições**  | 1. funcionário deve estar logado em sua conta no sistema  |
| --- | --- |
| **Passos**        |1. O caso de uso é iniciado quando um funcionário da Alemão Alinhamento deseja cadastrar um anúncio   |
|                   | 2.  O funcionário insere o nome do título do aúncio do produto |
|                   | 3. O funcionário insere a quantidade deste produto que deseja adicionar |
|                   | 4. O funcionário insere a descrição do anúncio produto |
|                   | 5.  O funcionário não adiciona o preço do produto anunciado|
|                   | 7. O funcionário aperta o botão para enviar o aúncio |
|                   | 8. Envio não pode ser concluído |
|                   | 9. Caso de uso é encerrado |
