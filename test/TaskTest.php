<?php

require_once __DIR__ . '/../src/Task.php';

use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    public function testCreateTask()
    {
        $task = new Task();
        $taskId = $task->create('Nova Tarefa', 'Descrição da Nova Tarefa');
        $this->assertGreaterThan(0, $taskId);
    }

    public function testUpdateTask()
    {
        $task = new Task();
        $taskId = $task->create('Tarefa Original', 'Descrição da Tarefa Original');
        $updated = $task->update($taskId, 'Tarefa Atualizada', 'Descrição da Tarefa Atualizada');
        $this->assertTrue($updated);
    }

    public function testDeleteTask()
    {
        $task = new Task();
        $taskId = $task->create('Tarefa a ser Excluída', 'Descrição da Tarefa a ser Excluída');
        $deleted = $task->delete($taskId);
        $this->assertTrue($deleted);
    }

    public function testFetchTasks()
    {
        $task = new Task();
        $tasks = $task->fetch();
        $this->assertIsArray($tasks);
    }
}
