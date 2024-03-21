<?php

class Task
{
    protected $tasks = [];

    public function create($title, $description)
    {
        // Simula a criação de uma tarefa e retorna um ID fictício
        $taskId = count($this->tasks) + 1;
        $this->tasks[$taskId] = ['title' => $title, 'description' => $description];
        return $taskId;
    }

    public function update($taskId, $title, $description)
    {
        // Simula a atualização de uma tarefa
        if (isset($this->tasks[$taskId])) {
            $this->tasks[$taskId]['title'] = $title;
            $this->tasks[$taskId]['description'] = $description;
            return true;
        } else {
            return false;
        }
    }

    public function delete($taskId)
    {
        // Simula a exclusão de uma tarefa
        if (isset($this->tasks[$taskId])) {
            unset($this->tasks[$taskId]);
            return true;
        } else {
            return false;
        }
    }

    public function fetch()
    {
        // Retorna todas as tarefas
        return $this->tasks;
    }
}
