<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TasksController extends Controller
{
    //

    public function index()
    {
    	$tasks = Task::all();


    	return view('taskslist',compact('tasks'));
    }

    // public function show($id)
    // {
    // 	$task =  Task::find($id);

    // 	return view('showonetask',compact('task'));
    // }

    //Route model binding
    public function show(Task $task)
    {

    	return view('showonetask',compact('task'));
    }
}
