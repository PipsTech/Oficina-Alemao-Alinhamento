# Interface de usuário NUM - Log In

## 1. Leiaute sugerido

![login](leiaute/Login.png)

## 2. Relacionamentos com outras interfaces

Esta interface permite através do header, uma navegação com as outras páginas, apenas ao clicar na indicação.
Também há uma opção para criar conta que levará o usuário ao campo de cadastro.

## 3. Campos

| **Número** | **Nome** | **Descrição** | **Valores válidos** | **Formato** | **Tipo** | **Restrições** |
| --- | --- | --- | --- | --- | --- | --- |
|1. |Preencher Email|Um campo onde o usuário deve preencher com seu email para efetuar o login|Todos|Texto|String|Necessario inserir ao menos o"@"|
|2. |Preencher Senha| Espaço para que deve ser preenchido pela senha referente a conta do email inserido anteriormente | Deve possuir ao menos uma letra maiúscula e um número | Texto | String | -não possui-- |

## 4. Comandos

| **Número** | **Nome** | **Ação** | **Restrições** |
| --- | --- | --- | --- |
|1. | Cadastrar | Analisará todas as informações recebidas nos campos "Nome", "Sobrenome", "Email", "Senha" e "Confirmar Senha" para verem se estão corretas e após isso criara uma conta para o usuario.|  Caso as informações apresentem erros, o processo não sera concluido e será demandado ao usuario para refaze-lo  |
|2. | Home | Uma indicação presente no header que quando clicada leva até a página inicial do site da oficina | --não possui-- |
|3. | Quem Somos | Uma indicação no header que quando clicada leva até a página de informações da oficina | --não possui-- |
|4. | Serviços | Uma indicação no header que quando clicada leva até a página de serviços oferecidos pela oficina | --não possui-- |
|5. | Produtos | Uma indicação na parte superior que quando clicada leva até a página de produtos a venda da oficina | --não possui-- |
|6. | Log In/Log Out | Uma indicação na parte superior que quando clicada leva ate a página de Log In ou quando ja logado o usuário pode fazer o Log Out da sua conta | --não possui-- |
|7. | Logar | Analisa os conteúdos preenchidos no "Inserir Senha" e no "Inserir Email" verificando se são verdadeiros, e realiza e efetua a ação de entrar na conta do usuário | --não possui-- |
|8. | Criar Conta | Se o usuário ainda não possuir uma conta no site, é possiver criá-la entrando na pagina por meio do hiperlink | --não possui-- |


