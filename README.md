# TESTE DESENVOLVEDOR PLENO - MADE4IT



1. [O-que-é](#O-que-é)
2. [Pré-requisitos](#Pré-requisitos)
3. [Como-usar?](#Como-usar)
4. [Portas](#Portas)

## O-que-é
Teste PHP para a vaga de Desenvolvedor Pleno da Made4IT, onde deve-se desenvolver um pequeno sistema de blog utilizando arquitetura MVC.

Houveram algumas modificações no projeto para o resultado final. A princípio é pedido, claramente, para não usar framework, porém, em um certo momento durante a madrugada, percebi que estava ficando complexo de mais, os arquivos estavam começando a ficar bagunçados, então resolvi usar a estrutura do Laravel para me ajudar na organização, entendo que não deveria mas achei, no momento, a melhor solução para organização.

Outra mudança foi a parte do backup, a princípio era para fazer um botão que realiza-se o backup, entretanto, devido ao modelo que eu escolhi fazer o projeto, utilizando containers dock, ficou meio complicado a integração do PHP com o backup da forma que eu queria. Tendo em vista que se tem um certo prazo para a entrega, apesar de não ter sido esclarecido no requisito, resolvi procurar uma solução mais rápida e barata para o momento. A solução foi fazer o backup no próprio script que sobe o programa.

## Pré-requisitos
Para o projeto você precisará estar usando um sistema com base GNU/Linux, ter o [Docker](https://www.docker.com/) e o [Docker-compose](https://github.com/docker/compose) instalados.

* Obs: Houveram, exaustivos, testes usando o sistema Fedora Silverblue 35, entretanto, na teoria, deve funcionar em qual sistema com base GNU/Linux.

## Como-usar
Clone o repositorio do [projeto](https://github.com/lkaranl/MADE4IT.git).
Entre na pasta do projeto e execute o [script](https://github.com/lkaranl/MADE4IT/blob/main/subir.sh) bash.

`$sudo ./subir.sh
`

Não tem muito segredo, o script faz todo o trabalho complicado de subir os container e subir as migrations do bando de dados.

Quando rodar o projeto pela primiera vez não há a necessidade de realizar o backup, então responda apenas como "nao".

Se tudo der certo, você deverá ter um log mais ou menos como esse:
![animacao](https://github.com/lkaranl/MADE4IT/raw/main/auxIMG/tudoCerto.png)

## Backup
O backup pode ser realizado de duas formas, a primeira é com a utilização do próprio script de subir o projeto, onde ele irá perguntar se deseja fazer o backup e também se deseja realizar o restore.

Uma observação importante é que se porventura desejar fazer o backup porém sem o restore, observe que a base de dados ficará vazia, isso irá quebrar o projeto pois não haverá tabela ao qual consultar, sendo necessário realizar o restore manualmente.

![animacao](https://github.com/lkaranl/MADE4IT/raw/main/auxIMG/subirsembackup.png)


E também pode ser realizado de maneira manual, utilizando o script backup.sh.

`$sudo ./backup.sh
`
spript
![animacao](https://github.com/lkaranl/MADE4IT/raw/main/auxIMG/backupManual.png)

**IMPORTANTE: Os comando devem ser realizados com permissão de root**
## Portas
- **nginx - Porta Principal do projeto** - `:8000`
- **mysql** - `:9906`
- **phpadmin** - `:8080`
