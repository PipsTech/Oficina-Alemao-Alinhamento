# Caso de uso 02 - RealizarLoginCliente

## 1. Descrição
Essa funcionalidade se refere ao login na plataforma como cliente, nesta o usuário cliente deve preencher os campos indicados para logar-se na plataforma

## 2. Atores
Usuário Cliente

## 3. Precondições


	1. O usuário já cadastrou-se no site uma vez.
 
## 4. Fluxo principal

    1. O caso de Uso se inicia quando o cliente entra na tela de Login do Cliente.
    2. O cliente preenche o campo do email.
    3. O cliente preenche o campo da senha.
    4. O cliente clicará em "Logar" para acessar o site logado.
    5. Caso de Uso encerrado.

## 5. Fluxos alternativos

### 5.1 Fluxo alternativo - Preencher incorretamente o campo do email

| **Precondições**  |1. O usuário já cadastrou-se no site uma vez. |
| --- | --- |
|  Passo 1          | O fluxo Alternativo se inicia quando o cliente entra na tela de login. |
|  Passo 2          | O cliente preenche o campo com o email incorreto. |
|  Passo 3          |   O cliente preenche o campo da senha|
|  Passo 4          | O cliente clicará em "Logar"  sem êxito. |
|  Passo 5          | Fluxo Alternativo encerrado. |

### 5.2 Fluxo alternativo - Preencher incorretamente o campo da senha

| **Precondições**  |1.O usuário já cadastrou-se no site uma vez. |
| --- | --- |
|  Passo 1          | O fluxo Alternativo se inicia quando o cliente entra na tela de login. |
|  Passo 2          | O cliente preenche o campo com o email incorreto. |
|  Passo 3          | O cliente preenche o campo com a senha incorreta. |
|  Passo 4          | O cliente clicará em "Logar"  sem êxito. |
|  Passo 5          | Fluxo Alternativo encerrado. |

### 5.3 Fluxo alternativo - Deixar em branco o campo do email

| **Precondições**  |1. O usuário já cadastrou-se no site uma vez. |
| --- | --- |
|  Passo 1          | O fluxo Alternativo se inicia quando o cliente entra na tela de login. |
|  Passo 2          | O cliente não preenche o campo do email. |
|  Passo 4          | O cliente preenche o campo com a senha   |
|  Passo 5          | O cliente clicará em "Logar"  sem êxito. |
|  Passo 6          | Fluxo Alternativo encerrado. |

### 5.4 Fluxo alternativo - Deixar em branco o campo da senha

| **Precondições**  |1.O usuário já cadastrou-se no site uma vez. |
| --- | --- |
|  Passo 1          | O fluxo Alternativo se inicia quando o cliente entra na tela de login. |
|  Passo 2          | O cliente preenche o campo do email. |
|  Passo 2          | O cliente não preenche o campo da senha. |
|  Passo 3          | O cliente clicará em "Logar"  sem êxito. |
|  Passo 4          | Fluxo Alternativo encerrado. |

### 5.5 Fluxo alternativo - Entrar na página sem ter cadastro

| **Precondições**  |1. Não possui |
| --- | --- |
|  Passo 1          | O fluxo Alternativo se inicia quando o usuário entra na tela de login. |
|  Passo 2          | O usuário percebe que não tem conta para logar no sistema. |
|  Passo 3          | O usuário clicará em "Não possui conta? Criar conta" para realizar o cadastro em outra página. |
|  Passo 4          | Fluxo Alternativo encerrado. |

### 5.6 Fluxo alternativo - Entrar na página como funcionário

| **Precondições**  |1. O usuário já foi cadastrado no site como funcionário. |
| --- | --- |
|  Passo 1          | O fluxo Alternativo se inicia quando o usuário entra na tela de login. |
|  Passo 2          | O usuário funcionário percebe que está no login para o usuário cliente. |
|  Passo 3          | O usuário funcionário clicará em "Entrar como Funcionario" para logar em outra página. |
|  Passo 4          | Fluxo Alternativo encerrado. |


