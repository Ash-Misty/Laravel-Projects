<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'Title' => 'required|string|max:255'
        ]);

        $task = Task::create([
            'Title' => $request->Title,
            'isCompleted' => false,
        ]);

        return response()->json([
            'message' => 'Task added successfully',
            'task' => $task
        ]);
    }
    public function index(Request $request)
    {
        $tasks=Task::all();
        if(!$tasks)
        {
            return response()->json([
                'Status'=>'Failed',
                'Message'=>'Failed to fetch tasks'
            ]);
        }
        return response()->json([
                'Status'=>'Success',
                'Message'=>'Successfully fetched the tasks',
                'Tasks'=>$tasks
            ]);
    }
}

