<?php

namespace App\Repositories\Task;

use Illuminate\Support\Facades\Request;

interface iTaskRepository
{
    public function getAll();
    public function create(Request $request);
    public function getById($id);
    public function update(Request $request, $id);
    public function delete($id);
}
