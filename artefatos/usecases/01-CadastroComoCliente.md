# Caso de uso 01 - Cadastro Como Cliente

## 1. Descrição
Essa funcionalidade refere-se ao cadastro do cliente na plataforma, nesta o usuário cliente preenche os campos e realiza o cadastro no sistema.

## 2. Atores
Usuário Cliente

## 3. Precondições

  
	1. Não há precondições.
 
## 4. Fluxo principal

    1. O caso de Uso se inicia quando o cliente entra na tela de Cadastro do cliente.
    2. O cliente preenche o campo nome com seu primeiro nome.
    3. O cliente preenche o campo sobrenome com seu sobrenome.
    4. O cliente preenche o campo email.
    5. O cliente preenche o campo senha.
    6. O cliente preenche o campo confirmar senha com o mesma senha preenchida anteriormente.
    7. O cliente clicará em "Cadastrar" para efetuar o cadastro no site.
    8. Caso de Uso encerrado.

## 5. Fluxos alternativos

### 5.1 Fluxo alternativo - Preencher incorretamente o campo confirmar senha

| **Precondições**  |1. Não possui |
| --- | --- |
|  Passo 1   | O fluxo Alternativo se inicia quando o cliente entra na tela de cadastro. |
|  Passo 2   | O cliente preenche o campo nome com seu primeiro nome |
|  Passo 3   |O cliente preenche o campo sobrenome com seu sobrenome  |
|  Passo 4   | O cliente preenche o campo email.   |
|  Passo 5   | O cliente preenche o campo senha.   |
|  Passo 6   | O cliente preenche o campo confirmar senha com um valor diferente do campo senha   |
|  Passo 7   | O cliente clicará em "Cadastrar"  sem êxito. |
|  Passo 8   | Fluxo Alternativo encerrado. |

### 5.2 Fluxo alternativo - Deixar em branco o campo nome

| **Precondições**  |1. Não possui |
| --- | --- |
|  Passo 1   | O fluxo Alternativo se inicia quando o cliente entra na tela de cadastro. |
|  Passo 2   | O cliente não preenche o campo nome com seu primeiro nome |
|  Passo 3   |O cliente preenche o campo sobrenome com seu sobrenome  |
|  Passo 4   | O cliente preenche o campo email.   |
|  Passo 5   | O cliente preenche o campo senha.   |
|  Passo 6   | O cliente preenche o campo confirmar senha    |
|  Passo 7   | O cliente clicará em "Cadastrar"  sem êxito. |
|  Passo 8   | Fluxo Alternativo encerrado. |

### 5.3 Fluxo alternativo - Deixar em branco o campo sobrenome

| **Precondições**  |1. Não possui |
| --- | --- |
|  Passo 1   | O fluxo Alternativo se inicia quando o cliente entra na tela de cadastro. |
|  Passo 2   | O cliente preenche o campo nome com seu primeiro nome |
|  Passo 3   |O cliente não preenche o campo sobrenome com seu sobrenome  |
|  Passo 4   | O cliente preenche o campo email.   |
|  Passo 5   | O cliente preenche o campo senha.   |
|  Passo 6   | O cliente preenche o campo confirmar senha    |
|  Passo 7   | O cliente clicará em "Cadastrar"  sem êxito. |
|  Passo 8   | Fluxo Alternativo encerrado. |

### 5.4 Fluxo alternativo - Deixar em branco o campo email

| **Precondições**  |1. Não possui |
| --- | --- |
|  Passo 1   | O fluxo Alternativo se inicia quando o cliente entra na tela de cadastro. |
|  Passo 2   | O cliente preenche o campo nome com seu primeiro nome |
|  Passo 3   |O cliente preenche o campo sobrenome com seu sobrenome  |
|  Passo 4   | O cliente não preenche o campo email.   |
|  Passo 5   | O cliente preenche o campo senha.   |
|  Passo 6   | O cliente preenche o campo confirmar senha    |
|  Passo 7   | O cliente clicará em "Cadastrar"  sem êxito. |
|  Passo 8   | Fluxo Alternativo encerrado. |


### 5.5 Fluxo alternativo - Deixar em branco o campo senha

| **Precondições**  |1. Não possui |
| --- | --- |
|  Passo 1   | O fluxo Alternativo se inicia quando o cliente entra na tela de cadastro. |
|  Passo 2   | O cliente preenche o campo nome com seu primeiro nome |
|  Passo 3   |O cliente preenche o campo sobrenome com seu sobrenome  |
|  Passo 4   | O cliente preenche o campo email.   |
|  Passo 5   | O cliente não preenche o campo senha.   |
|  Passo 6   | O cliente preenche o campo confirmar senha    |
|  Passo 7   | O cliente clicará em "Cadastrar"  sem êxito. |
|  Passo 8   | Fluxo Alternativo encerrado. |

### 5.6 Fluxo alternativo - Deixar em branco o campo confirmar senha

| **Precondições**  |1. Não possui |
| --- | --- |
|  Passo 1   | O fluxo Alternativo se inicia quando o cliente entra na tela de cadastro. |
|  Passo 2   | O cliente preenche o campo nome com seu primeiro nome |
|  Passo 3   |O cliente preenche o campo sobrenome com seu sobrenome  |
|  Passo 4   | O cliente preenche o campo email.   |
|  Passo 5   | O cliente preenche o campo senha.   |
|  Passo 6   | O cliente não preenche o campo confirmar senha    |
|  Passo 7   | O cliente clicará em "Cadastrar"  sem êxito. |
|  Passo 8   | Fluxo Alternativo encerrado. |

### 5.7 Fluxo alternativo - Deletar cadastro

| **Precondições**  |1. Possuir cadastro |
| --- | --- |
|  Passo 1   | O fluxo Alternativo se inicia quando o cliente entra na tela de cadastro. |
|  Passo 2   | O cliente clicará em "Cancelar Cadastro"  |
|  Passo 3   | Fluxo Alternativo encerrado. |


### 5.8 Fluxo alternativo - Alterar dados

| **Precondições**  |1. Possuir cadastro |
| --- | --- |
|  Passo 1   | O fluxo Alternativo se inicia quando o cliente entra na tela de cadastro. |
|  Passo 2   | O cliente altera o campo que desejar, incluindo novos dados a este.  |
|  Passo 3   | Fluxo Alternativo encerrado. |
