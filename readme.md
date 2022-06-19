## Big File Challenge

Este desafio foi proposto pelo [Zanfranceschi](https://twitter.com/zanfranceschi/)
Você pode ver a proposta do desafio [aqui](https://dev.to/zanfranceschi/desafio-processar-arquivos-grandes-com-restricao-de-memoria-2ie3)


Para a implementação da solução utilizei os seguintes conceitos:
- Generators, que aprendi no [video](https://www.youtube.com/watch?v=1_TnGAxEoPk) do [Vinicius Dias - Dias de Dev](https://twitter.com/cviniciussdias), a solução que está neste repositório é a do vídeo do Vinicius :) 
- Fiber, que aprendi no [video](https://www.youtube.com/watch?v=P7ucMvlVhGc) do [Leonardo Tumadjian - DifferDev](https://www.linkedin.com/in/leonardotumadjian/) e resolvi aplicar este desafio usando Fibers!

## Explicação
O grande ponto do desafio é limitar sua infra, onde não é possível sua aplicação carregar em memória um arquivo enorme, dessa forma resolvi
utilizar Generators que trabalha com Corrotinas e Fibers que permite trabalhar também com Corrotinas no PHP 8.1 > 

A ideia de corrotinas é permitir que um processo seja parado, retorne para a função principal e em seguida volte para o mesmo ponto para continuar executando o processo.
A ideia de corrotinas permite trabalhar de forma assíncrona! 

## Como executar o projeto: 

1 - Clone este repositório:
```shell
git clone git@github.com:NicolasPereira/process-big-file-php.git
```

2 - Crie o arquivo gigante
```shell
php gerador-de-arquivo.php
```

3 - Para rodar usando generators execute
```shell 
cd src/Generators
php generators.php
```

4 - Para rodar usando Fibers execute
```shell 
cd src/Fibers
php fibers.php
```

>Para rodar utilizando Fibers é necessário utilizar o PHP 8.1

