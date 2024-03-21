# Documentação do Projeto de Gerenciamento de Tarefas

Este é um sistema simples de gerenciamento de tarefas desenvolvido em PHP, utilizando o PHPUnit para testes automatizados. O sistema permite a criação, atualização, exclusão e busca de tarefas.

## Estrutura do Projeto

O projeto está estruturado da seguinte forma:

dstr/
├── src/
│ └── Task.php
└── test/
└── TaskTest.php

- **src/Task.php**: Contém a definição da classe Task com as operações CRUD.
- **tests/TaskTest.php**: Contém os testes automatizados para a classe Task.

## Como Usar o Projeto

1. Clone o repositório do projeto:

git clone https://github.com/seu-usuario/projeto.git

2. Navegue até o diretório do projeto:

3. Execute os testes automatizados:

vendor/bin/phpunit tests

Isso executará os testes e mostrará os resultados no terminal.

## Primeiro Teste com Erro

No primeiro teste automatizado, tentamos criar uma nova tarefa e verificar se o ID retornado é maior que zero. Se o teste falhar, provavelmente é porque a classe Task não foi encontrada, resultando em um erro como este:

Error: Class "Task" not found

## Segundo Teste com Acerto

Após a inclusão da classe Task corretamente no arquivo de teste, o primeiro teste passará com sucesso. No segundo teste, verificamos a atualização de uma tarefa. Se o teste falhar, provavelmente é devido a algum erro na lógica de atualização da tarefa ou no método update() da classe Task.

Ao corrigir os erros e executar novamente os testes automatizados, o segundo teste passará com sucesso, demonstrando que a atualização da tarefa está funcionando corretamente.
