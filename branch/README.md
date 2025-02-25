[Voltar](/criando-repo/README.md)

<div align="center">

# O que é branch

![Branchs](/img/git-branches.png)

</div>

## O que é um Branch em Git?

Em Git, um branch (ramificação) é como uma linha de desenvolvimento separada dentro do seu projeto de software. Pense em um projeto como uma árvore principal e cada branch como um galho que se estende a partir dessa árvore. Cada galho pode ter seu próprio conjunto de mudanças e melhorias, enquanto a árvore principal (ou branch principal) permanece intacta.

## Como funciona um Branch?

Quando você cria um novo branch no Git, você está basicamente criando uma cópia do código do seu projeto no estado atual. Essa cópia vive em paralelo com o branch principal (main no GitHub). A partir daí, você pode fazer alterações no novo branch sem afetar o código no branch principal.

## Por que usar Branches?

Branches são úteis por várias razões:

1. **Desenvolvimento Isolado**: Se você está trabalhando em uma nova funcionalidade ou correção de bug, pode criar um novo branch. Isso permite que você trabalhe sem interferir no código principal até que suas mudanças estejam prontas para serem integradas.

2. **Colaboração**: Quando várias pessoas estão trabalhando no mesmo projeto, cada uma pode ter seu próprio branch para trabalhar em suas partes sem conflitos diretos com o trabalho dos outros.

3. **Testes e Experimentação**: Branches também são úteis para testar ideias ou experimentos sem arriscar o código principal do projeto.

## Como criar e usar Branches?

No Git, você pode criar um novo branch usando o comando `git checkout -b nome-do-branch`. Isso cria um novo branch a partir do branch atual e muda você para esse novo branch.

Por exemplo:

```bash
git checkout -b minha-nova-feature
```

Agora você está no seu novo branch minha-nova-feature e pode fazer alterações sem afetar o branch principal. Para voltar ao branch principal, use git checkout nome-do-branch.

Depois de fazer suas alterações em um branch e estar pronto para combiná-las de volta ao branch principal, você pode fazer um "merge" usando git merge ou criar uma "pull request".

<div align="right">

[Próximo](/historico/README.md)

</div>
