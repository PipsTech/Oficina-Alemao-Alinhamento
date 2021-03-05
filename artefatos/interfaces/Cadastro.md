# Interface de usuário NUM - Cadastro

## 1. Leiaute sugerido

![Cadastro](leiaute/Cadastro.png)

## 2. Relacionamentos com outras interfaces

Esta interface permite através do header, uma navegação com as outras páginas, apenas ao clicar na indicação. E com o Botão "Cadastrar" levará o usuário até a tela da Home

## 3. Campos

| **Número** | **Nome** | **Descrição** | **Valores válidos** | **Formato** | **Tipo** | **Restrições** |
| --- | --- | --- | --- | --- | --- | --- |
|1. | Preencher Nome | Espaço para o usuário inserir seu nome | Somente letras | Texto | String | não é permitido números ou caracteres fora do alfabeto |
|2. | Preencher Sobrenome | Espaço para o usuário inserir seu sobrenome | Somente letras | Texto | String | não é permitido numeros ou caracteres fora do alfabeto |
|3. | Preencher Email | Espaço para o usuário inserir seu email valido | Todos | Texto | String | Necessario inserir ao menos o"@" |
|4. | Preencher Senha | Espaço para o usuário inserir sua senha valida | Todos | Texto | String | Necessario possuir ao menos uma letra maiuscula e um numero |
|5. | Preencher Confirmar Senha | Espaço para o usuario inserir sua senha igual ao Campo anterior | Todos | Texto | String | Necessario ser exatamente igual a senha inserida no campo anterior |

## 4. Comandos

| **Número** | **Nome** | **Ação** | **Restrições** |
| --- | --- | --- | --- |
|1. | Cadastrar | Analisará todas as informações recebidas nos campos "Nome", "Sobrenome", "Email", "Senha" e "Confirmar Senha" para verem se estão corretas e após isso criara uma conta para o usuario.|  Caso as informações apresentem erros, o processo não sera concluido e será demandado ao usuario para refaze-lo  |
|2. | Home | Uma indicação presente no header que quando clicada leva até a página inicial do site da oficina | --não possui-- |
|3. | Quem Somos | Uma indicação no header que quando clicada leva até a página de informações da oficina | --não possui-- |
|4. | Serviços | Uma indicação no header que quando clicada leva até a página de serviços oferecidos pela oficina | --não possui-- |
|5. | Produtos | Uma indicação na parte superior que quando clicada leva até a página de produtos a venda da oficina | --não possui-- |
|6. | Log In/Log Out | Uma indicação na parte superior que quando clicada leva ate a página de Log In ou quando ja logado o usuário pode fazer o Log Out da sua conta | --não possui-- |

