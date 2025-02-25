[Voltar](/comandos-terminal/README.md)

<div align="center">

# Git Ignore

![Git Ignore](/img/gitignore.png)

</div>

## O que é o .gitignore?

O .gitignore é um arquivo usado pelo sistema de controle de versões Git para dizer quais arquivos e pastas ele deve ignorar, ou seja, quais arquivos não devem ser rastreados ou incluídos nas alterações quando você faz commit no Git. Esses arquivos não estarão presentes no seu Git Server (GitHub nesse caso)

## Por que usar o .gitignore?

Quando você está trabalhando em um projeto de software, geralmente existem arquivos ou pastas que você não quer que sejam adicionados ao Git. Isso pode incluir arquivos temporários criados pelo sistema, arquivos de configuração local que não devem ser compartilhados com outras pessoas, ou até mesmo arquivos de log que são gerados automaticamente.

## Como usar o .gitignore?

Primeiro, crie um arquivo chamado .gitignore na raiz do seu repositório Git.
Dentro do arquivo .gitignore, liste os padrões dos nomes de arquivos ou pastas que você deseja ignorar. Por exemplo:

```gitignore
# Ignorar arquivos
config.ini

# Ignorar pastas
secrets/

# Ignora todos os arquivos que terminam em .tmp
*.tmp

# Ignora todos os arquivos .txt dentro de minhaPasta
minhaPasta/*.txt
```

<div align="right">
  
[Próximo](/criando-repo/README.md)
  
</div>
