[Voltar](/branch/README.md)

<div align="center">

# Analisando Históricos de Commits

![historico](/img/historico.png)

</div>

<div>

## O que é um Histórico de Commits?

Um histórico de commits em um repositório Git é como uma linha do tempo que registra todas as alterações feitas em um projeto ao longo do tempo. Cada alteração significativa é registrada como um "commit", que inclui informações sobre o que foi modificado, quem fez a modificação e quando isso aconteceu.

## Como Analisar o Histórico de Commits?

1.  ### Visualizar o Histórico Geral:

    Para ver uma lista de todos os commits feitos no projeto, você pode usar o comando git log no terminal ou prompt de comando, estando dentro do diretório do repositório Git. Isso mostrará os commits em ordem cronológica, do mais recente ao mais antigo.

    Exemplo:

    ```bash
    git log
    ```

    #

2.  ### Entender as Informações de um Commit:

    Cada entrada no histórico (ou commit) exibe informações importantes:

-   **Hash do Commit:** Um identificador único para aquele commit.
-   **Autor:** Quem fez o commit.
-   **Data e Hora:** Quando o commit foi feito.
-   **Mensagem de Commit:** Uma descrição breve das mudanças feitas.

    Essas informações ajudam a entender o que foi feito em cada modificação e quem foi responsável por ela.

    ```bash
    # Filtra por autor do commit
    git log --author="João da Silva"

    # Mostra todos os commits depois dessa data (YYYY-MM-DD)
    git log --since="2024-04-17"

    # Mostra todos os commits antes dessa data
    git log --until="2024-04-30"

    # Mostra todos os commits do João da Silva entre datas especificadas.
    git log --author="João da Silva" --since="2024-04-17" --until="2024-04-30"

    # Mostra todos os commits com uma palavra chave na mensagem de commit.
    git log --grep="openai"
    ```

    #

3. ### Ver as Mudanças em um Commit Específico:

    Você pode usar o comando git show seguido do hash do commit para ver as alterações feitas naquele commit específico.

    Exemplo:

    ```bash
    git show hash_do_commit
    ```

4. ### Comparar Diferenças entre Commits:

    O comando git diff permite comparar as diferenças entre dois commits ou entre um commit e o estado atual do projeto. Isso é útil para entender as mudanças introduzidas em diferentes momentos.

    Exemplo para comparar dois commits:

    ```bash
    git diff hash_commit_anterior hash_commit_atual
    ```

</div>

<div align="right">

[Próximo](/pr/README.md)

</div>
