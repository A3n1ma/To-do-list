<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        // $tasks = Task::all();
        $tasks = Task::paginate(5);
        return view('index', [
            'tasks' => $tasks
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // $task = new Task();
        // $task->title = $request->title;
        // $task->details = $request->details;
        // $task->save();
        // return redirect('/tasks');

        Task::create([
            'title' => $request->title,
            'details' => $request->details
        ]);
        return redirect('/tasks');
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('edit', ['task' => $task]);
    }

    public function update($id, Request $request)
    {
        // dump($id);
        // dd($request->all());         //распечатываем

        $task = Task::find($id);
        $task->title = $request->title;
        $task->details = $request->details;
        $task->save();
        return redirect('/tasks');
    }

    public function delete($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect('/tasks');
    }

    public function changeStatus($id)
    {
        $task = Task::find($id);
        $task->status = $task->status == 0 ? 1 : 0;
        $task->save();
        return $task->status; 
    }
}
