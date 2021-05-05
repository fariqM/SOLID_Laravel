<?php

namespace App\Repositories\Task;

use App\Models\Task;
use Illuminate\Support\Facades\Request;

class TaskRepository implements iTaskRepository
{
    public function getAll()
    {
        return Task::all();
    }
    public function create(Request $request)
    {
        return Task::create($request->all());
    }
    public function getById($id)
    {
        return Task::findOrFail($id);
    }
    public function update(Request $request, $id)
    {
        $task =  Task::findOrFail($id);
        return $task->update($request->all());
    }
    public function delete($id)
    {
        return Task::destroy($id);
    }
}
