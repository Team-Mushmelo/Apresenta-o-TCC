[Voltar](/historico/README.md)

<div align="center">

# Pull Requests

![Ilustração de forks](/img/pr.png)

</div>

## O que são Pull Requests?

Um pull request é uma solicitação feita por um colaborador de um projeto de software para que suas alterações sejam incorporadas (mescladas) ao código principal do projeto. Essas alterações podem incluir novas funcionalidades, correções de bugs ou melhorias no código.

## Como fazer uma Pull Request?

1. ### Fork

    Caso não tenha os privilégios para alterar diretamente o repositório, faça um fork do projeto ao qual quer contribuir.

2. ### Clonar o repositório

    Clone o repositório localmente e faça suas mudanças.

3. ### Criar uma branch para as mudanças

    No diretório do projeto, execute o seguinte comando para criar uma branch nova:

    ```bash
    git checkout -b branch-nova-feature
    ```

4. ### Push na branch

    Faça um commit e push de suas mudanças no seu repositório.

    ```bash
    git add .
    git commit -m "Mensagem"
    git push origin branch-nova-feature
    ```

5. ### Crie a Pull Request
    Crie a pull request usando o website do GitHub.

<div align="right">

[Próximo](/fork/README.md)

</div>
