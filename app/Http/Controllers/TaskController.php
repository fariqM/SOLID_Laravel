<?php

namespace App\Http\Controllers;

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
}
