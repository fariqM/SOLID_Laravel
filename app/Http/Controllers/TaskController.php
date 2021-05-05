<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Task\TaskRepository;

class TaskController extends Controller
{
    protected $tasks;
    public function __construct(TaskRepository $tasks)
    {
        $this->tasks = $tasks;
    }
    public function index()
    {
        $tasks = $this->tasks->getAll();
        return \response()->json($tasks, 201);
    }
    public function store(Request $request)
    {
        $task = $this->tasks->create($request->all());
        return \response()->json([
            'messages' => 'created data successfully!',
            'data' => $task
        ], 201);
    }
    public function show($id)
    {
        $task = $this->tasks->getById($id);
        return \response()->json($task, 201);
    }
    public function update(Request $request, $id)
    {
        $task = $this->tasks->update($request->all(), $id);
        return \response()->json([
            'messages' => 'updated data successfully!',
            'data' => $task,
        ], 201);
    }
    public function destroy($id)
    {
        $task = $this->tasks->delete($id);
        return \response()->json([
            'messages' => 'deleted data successfully!',
            'data' => $task
        ], 201);
    }
}
