<?php

namespace App\Repositories\Task;

interface ITaskRepository
{
    public function getAll();
    public function create($request);
    public function getById($id);
    public function update($request, $id);
    public function delete($id);
}
