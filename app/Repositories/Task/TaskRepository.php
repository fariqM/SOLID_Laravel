<?php

namespace App\Repositories\Task;

use App\Models\Task;

class TaskRepository implements ITaskRepository
{
    public function getAll()
    {
        return Task::all();
    }
    public function create($request)
    {
        return Task::create($request);
    }
    public function getById($id)
    {
        return Task::findOrFail($id);
    }
    public function update($request, $id)
    {
        //data can't be read, just only give response true or false of updated
        $task = Task::findOrFail($id);
        $task->update($request);
        return $task;
    }
    public function delete($id)
    {
        $task = Task::findOrFail($id);
        $task->delete($id);
        return $task;
    }
}
