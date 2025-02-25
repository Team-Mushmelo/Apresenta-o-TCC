[Voltar](/comandos-terminal/README.md)

<div align="center">

# Criando seu primeiro repositório

![Github](/img/github.png)

### O que é um repositório

</div>

Um repositório Git é como uma pasta virtual onde você armazena todos os arquivos e o histórico de alterações do seu projeto. Ele registra cada mudança feita nos arquivos ao longo do tempo, permitindo que você acompanhe o progresso do projeto, colabore com outras pessoas e reverta para versões anteriores do código, se necessário. É como uma caixa de memórias e evolução do seu projeto, acessível e gerenciável a qualquer momento.

## Como criar um repostório

Crie um novo repositório Git localmente:

Use o comando `git init` para iniciar um novo repositório Git no diretório do seu projeto. Isso prepara o seu projeto para ser rastreado pelo Git e permite que você inicie o controle de versão.

```bash
git init
```

Adicione seus arquivos ao repositório:Use o comando git add . para adicionar todos os arquivos do seu projeto ao "staging area", onde você prepara suas mudanças para serem commitadas (salvas).

```bash
git add .
```

Faça o commit das suas mudanças:Use o comando git commit -m "Mensagem do commit" para salvar suas mudanças no repositório Git, junto com uma mensagem que descreve o que foi feito.

```bash
git commit -m "Initial commit"
```

Acesse o GitHub e crie um novo repositório, seguindo as instruções na interface do usuário.
Conecte seu repositório local ao repositório remoto no GitHub: use o comando git remote add origin URL_do_repositorio para adicionar o repositório remoto como destino para enviar suas alterações locais.

```bash
git remote add origin URL_do_repositorio
```

Use o comando git push origin main para enviar suas mudanças locais para o repositório remoto no GitHub, na branch principal (geralmente chamada de "main" ou "master").

```bash
git push origin main
```

Com esses passos, você criou um novo repositório Git, adicionou seus arquivos, fez um commit das suas mudanças e enviou tudo para o GitHub, onde seu projeto agora está hospedado e pronto para ser compartilhado e colaborado com outras pessoas.

Este documento fornece um guia passo a passo simples sobre como criar um repositório Git localmente, adicionar seus arquivos, fazer um commit e enviá-los para o GitHub. Ele é projetado para ser acessível e fácil de entender, adequado para alunos do ensino médio.

# Projeto 1

Agora, chegou a hora de testar seus conhecimentos! Para isso, crie um projeto em uma das seguintes linguagens ou frameworks:

-   .NET (C#)
-   React Native
-   PHP

Após isso, **crie um repositório** na equipe aluno da organização da Oficina GitTec e **faça um commit**.

<div align="right">

[Próximo](/branch/README.md)

</div>
