# Documentação do Projeto: Gerenciador de Tarefas
![image](/assents/gerenciadorDeTarefas.png)
<hr>
![image](/assents/firstTest.png)
<hr>
![image](/assents/testecorreto.png)
<hr>
## Visão Geral
Este projeto é um gerenciador de tarefas simples desenvolvido em PHP, que permite criar, atualizar, excluir e buscar tarefas. O objetivo é demonstrar o desenvolvimento de uma aplicação básica com foco em funcionalidades CRUD (Create, Read, Update, Delete) e testes automatizados usando o PHPUnit.

## Implementação da Lógica
A lógica do gerenciador de tarefas está implementada na classe `Task` localizada no arquivo `Task.php` dentro do diretório `src`. Esta classe possui os seguintes métodos:

- `create($title, $description)`: Cria uma nova tarefa com o título e a descrição fornecidos, retornando o ID da tarefa criada.
- `update($taskId, $title, $description)`: Atualiza uma tarefa existente com o ID fornecido, alterando seu título e descrição.
- `delete($taskId)`: Exclui uma tarefa existente com o ID fornecido.
- `fetch()`: Retorna todas as tarefas existentes.

## Testes Automatizados
Os testes automatizados são implementados na classe `TaskTest` localizada no arquivo `TaskTest.php` dentro do diretório `tests`. Esta classe utiliza o PHPUnit para testar os métodos da classe `Task`. Os testes incluem:

- `testCreateTask()`: Verifica se uma tarefa é criada com sucesso.
- `testUpdateTask()`: Verifica se uma tarefa é atualizada corretamente após a criação.
- `testDeleteTask()`: Verifica se uma tarefa é excluída com sucesso.
- `testFetchTasks()`: Verifica se a função de busca de tarefas retorna um array.

## Como Contribuir
Se você deseja contribuir para o projeto, siga estas etapas:

1. Faça um fork deste repositório para sua própria conta no GitHub.
2. Clone o fork para sua máquina local usando o comando `git clone`.
3. Faça suas alterações no código.
4. Certifique-se de adicionar testes para qualquer nova funcionalidade ou correção de bug.
5. Execute os testes localmente usando o PHPUnit para garantir que todas as alterações funcionem corretamente.
6. Faça o commit de suas alterações e envie para o seu fork.
7. Abra um pull request para o repositório original, descrevendo suas alterações em detalhes.

## Como Testar o Projeto
firstTest
Para testar o projeto localmente sem integração contínua, siga estas etapas:

1. Clone o repositório para sua máquina local usando o comando `git clone`.
2. Certifique-se de ter o PHPUnit instalado globalmente ou localmente no projeto usando o Composer.
3. Execute os testes automatizados usando o PHPUnit com o comando `vendor/bin/phpunit`.
4. Verifique se todos os testes passam sem erros.
