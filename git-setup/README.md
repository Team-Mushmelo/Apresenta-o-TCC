[Voltar](/git-github/README.md)

<div align="center">

# Setup do Git

![Imagem de setup](/img/setup.png)

</div>

Para fazer o setup, instale o Git em https://git-scm.com, abra o Git Bash e siga os seguintes passos:

1. Configure seu nome e e-mail usando `git config`:

```bash
git config --global user.name "Seu nome"
git config --global user.email "seu@email.com"

# Caso já exista uma conta conectada, utilize os seguintes comandos:
git config --global --replace-all user.name "Seu nome"
git config --global --replace-all user.email "seu@email.com"
```

2. Configure a chave SSH para conectar o Git com sua conta GitHub:

```bash
# Remover a pasta .ssh
rm -rf ~/.ssh
# Rode o ssh-agent

# Caso estiver usando Git Bash
eval "$(ssh-agent -s)"

# Caso estiver usando Windows CMD
start-ssh-agent -s

# Crie a chave SSH
ssh-keygen -t ed25519 -C "seu@email.com"

# Adicione a chave SSH ao agente
# Esse local é, por exemplo, C:\Users\aluno\.ssh
ssh-add ~/.ssh/id_ed25519
```

3. Copie o conteúdo do arquivo `~/.ssh/id_ed25519.pub` e cole nas configurações de SSH do GitHub para completar a configuração.

# Como desfazer o Setup

1. Remova chave do ssh-agent

```bash
eval "$(ssh-agent -s)" # Inicia o ssh-agent caso tenha desconectado
ssh-add -D
```

2. Apague a pasta .ssh, geralmente localizada em `C:\User\NomeDoUsuario\.ssh`
3. Remova o Git Config:

```bash
git config --global --unset user.name
git config --global --unset user.email
```

4. Remova a chave ssh do GitHub

<div align="right">

[Próximo](/comandos-terminal/README.md)

</div>
