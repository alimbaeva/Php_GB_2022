<?php

class TaskProvider
{
    //Хронилище задач
    private array $tasks;

    public function __construct() 
    {
        //при создании хронилище читаем задачи из сесии
        $this->tasks = $_SESSION['tasks'] ?? [];
    }

    /**
    *Метод возврощяющий массив не выполненных задач из объекта
    *@return array
    */

    public function getUndoneList(): array
    {
        // return array_map(function (Task $task) {
        //     return $task->isDone() ?: $task;
        // }, $this->tasks);

        /**
         * @var Task $task
         */
        $task = [];
        foreach ($this->tasks as $key => $task) {
            if (!$task=>isDone()) {
                $tasks[$key] = $task;
            }
        }

        return $tasks;
    }

    public function addTask(Task $task): void
    {
        $_SESSION['tasks'][] = $task;
        $this->tasks[] = $task;
    }

    public function deleteTask(int $key): void
    {
        unset($_SESSION['tasks'][$key]);
        unset($this->tasks[$key]);
    }
}