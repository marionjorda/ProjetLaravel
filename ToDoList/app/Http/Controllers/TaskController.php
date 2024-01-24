<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('tasks.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'date' => 'required|date',
            'category' => 'required|exists:categories,id',
        ]); 
        print_r($validated);
        Task::create([
            'name' => $validated['name'],
            'date' => $validated['date'],
            'category_id' => $validated['category'],
        ]);
        return redirect()->route('tasks.index')->with('success', 'Task create');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        $categories = Category::all();
        return view('tasks.edit', compact('task', 'categories'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required|date',
            'category' => 'required|exists:categories,id',
        ]);

        $task->update($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task update');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task delete');
    }
}
