[Voltar](/git-setup/README.md)

<div align="center">

# Familiarização com o terminal

![Tela da Matrix](/img/cmatrix.png)

</div>

### Comandos básicos do terminal

#### `cd`

O comando `cd` muda o diretório/pasta em que o terminal executa comandos:

```bash
# Isto é um comentário! O terminal não executará isso!

# ./ se refere a pasta na qual você está.
# Isso é chamado de caminho relativo!
cd ./minhaPasta/

# Muda o diretório para a pasta Dowloads do usuário user1
cd C:/Users/user1/Downloads

# .. se refere a pasta "pai" da pasta atual
# Imagine que você está na pasta C:/Users/user1/Downloads
# O seguinte comando muda para a pasta C:/Users/user1
cd ..

# Se rodar este comando na pasta C:/Users/user1/Downloads, você será levado para a pasta Documents do user1.
cd ../Documents

# Se você rodar isso, você será levado para a pasta raiz do disco (C:/ por exemplo)
cd \
```

#### `mkdir`

O comando `mkdir` cria um diretório/pasta com o nome especificado:

```bash
mkdir minhaPasta

mkdir ../minhaPasta2

mkdir C:/Users/user1/Downloads/minhaPasta3
```

#### `dir`

O comando `dir` lista os arquivos e diretórios/pastas de uma pasta:

```bash
# Mostra tudo da pasta atual
dir

# Mostra tudo da pasta Downloads
dir C:/Users/user1/Downloads
```

## Git

#### `git init`

O comando git init cria um novo repositório Git para o seu projeto. É como abrir um álbum de fotos vazio pronto para adicionar todas as suas imagens (ou arquivos) enquanto trabalha no projeto. Depois de executar git init, o Git começa a acompanhar todas as mudanças nos arquivos desse diretório, permitindo que você salve (commit) e reverta as alterações conforme necessário.

```bash
# Inicia um repositório com a branch padrão
git init

# Inicia um respositório com a branch especificada
git init -b main
```

#### `git config`

O comando git config permite ajustar as configurações do seu perfil no Git, como nome de usuário e endereço de e-mail. É como personalizar seu perfil no Git para identificar suas contribuições nos projetos.

```bash
# Configura o nome
git config --global user.name "Seu nome"

# Configura o e-mail
git config --global user.email "seu@email.com
```

#### `git add`

O comando `git add` é como preparar suas mudanças para serem salvas. Você seleciona quais arquivos ou partes das alterações deseja incluir no próximo commit. Por exemplo, se você criou um novo arquivo ou modificou um existente, você usa git add para informar ao Git que deseja incluir essas alterações no próximo commit. Este comando prepara as mudanças para serem registradas quando você executar git commit, criando assim um novo "ponto de salvamento" na história do seu projeto.

```bash
# Prepara as mudanças do projeto inteiro
git add .

# Prepara as mudanças de um arquivo específico
git add index.html
```

#### `git commit`

O comando `git commit` é como tirar uma foto das mudanças que você fez em seu projeto de programação. Ele registra todas as alterações desde o último commit, como adição, modificação ou remoção de arquivos, junto com uma mensagem que descreve o que foi feito. Esses "pontos de salvamento" ajudam você a acompanhar o progresso do seu projeto e a voltar a versões anteriores, se necessário.

```bash
git commit -m "Alterações no sistema de autenticação"
```

#### `git push`

O comando `git push` é como enviar suas mudanças locais para um repositório remoto, como o GitHub. Ele envia os commits que você fez no seu computador para o servidor remoto, mantendo assim uma cópia atualizada do seu projeto online. Isso permite que outras pessoas vejam suas alterações e colaboradores trabalhem no mesmo projeto.

```bash
# Envia as mudanças para o repositório remoto na branch
git push origin main
```

#### `git clone`

O comando `git clone` é um comando usado para fazer uma cópia de um repositório Git existente (um projeto de software com controle de versão) para o seu próprio computador.

```bash
# Clona o repositório "hub" por meio de HTTPS
git clone https://github.com/Oficina-GitTec/hub

# Clona o repositório "hub" por meio de SSH
git clone git@github.com:Oficina-GitTec/hub
```

#### `git pull`

O comando `git pull` no Git permite atualizar seu projeto local com as últimas alterações do repositório remoto. Ele sincroniza seu trabalho com o trabalho de outros colaboradores, trazendo novos commits e alterações feitas por eles para o seu projeto local. Isso garante que você esteja sempre trabalhando com a versão mais atualizada do código, facilitando a colaboração e o acompanhamento do progresso do projeto.

```bash
# Atualiza o projeto com as mudanças da brach main
git pull origin main
```

#### `git status`

O comando `git status` mostra uma lista das mudanças feitas nos arquivos do seu projeto desde o último "salvamento" (commit). Ele ajuda a acompanhar quais arquivos foram modificados, adicionados ou removidos, permitindo que você saiba o que precisa ser adicionado ao próximo "salvamento" (commit). É como um assistente que mantém você informado sobre o que está acontecendo no seu projeto.

```bash
git status
```

#### `git log`

O comando `git log` exibe o histórico de alterações do seu projeto, mostrando os commits feitos, quem os fez e quando foram feitos. É como revisitar o registro de todas as mudanças feitas no seu projeto, permitindo entender sua evolução.

```bash
# Exibe todos os commits no histórico
git log

# Exibe o histórico deum arquivo específico
git log arquivo.file
```

#### `git checkout`

O comando `git checkout` permite mudar entre diferentes versões do seu projeto armazenadas em diferentes ramificações (branches). É como trocar entre diferentes linhas do tempo do seu projeto para experimentar novos recursos ou corrigir bugs.

```bash
# Muda para a branch main
git checkout main

# Cria e muda para a branch dev
git checkout -b dev

# Descarta alteração não salvas do arquivo
git checkout arquivo.file

# Muda para uma versão específica do código
git checkout codigo_commit
```

#### `git remote`

O comando git remote é como adicionar um endereço para enviar e buscar mudanças no Git. É como adicionar o endereço de um armazém à sua lista de contatos para que você possa enviar e receber coisas dele sempre que precisar.

```bash
# Adiciona endereço (remote) para enviar as mudanças
git remote add origin git@github.com:nome-usuario/repositorio

# Remove endereço do git
git remote remove origin


# Lista os endereços
git remote -v
```

<div align="right">

[Próximo](/criando-repo/README.md)

</div>
