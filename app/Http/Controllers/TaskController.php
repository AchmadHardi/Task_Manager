<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // Display a list of existing tasks
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    // Display a form to add a new task
    public function create()
    {
        return view('tasks.create');
    }

    // Store a new task in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'status' => 'required|in:Pending,In Progress,Completed',
        ]);

        Task::create($validatedData);

        return redirect()->route('tasks.index');
    }

    // Display a form to edit a task
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.edit', ['task' => $task]);
    }

    // Update the task in the database
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'status' => 'required|in:Pending,In Progress,Completed',
        ]);

        $task = Task::findOrFail($id);
        $task->update($validatedData);

        return redirect()->route('tasks.index');
    }

    // Delete a task
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('tasks.index');
    }

    // Search for tasks based on title and/or status
    public function search(Request $request)
    {
        $title = $request->input('title');
        $status = $request->input('status');

        $tasks = Task::query()
            ->when($title, function ($query) use ($title) {
                $query->where('title', 'like', "%$title%");
            })
            ->when($status, function ($query) use ($status) {
                $query->where('status', $status);
            })
            ->get();

        return view('tasks.index', ['tasks' => $tasks]);
    }
}
