<?php

namespace App\Http\Controllers;

use App\Task;
use App\Service; 
use App\Status; 
use App\Mebel; 
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        
        $tasks = Task::all();
        return view('admin.tasks')->with('tasks', $tasks);
    }


    public function createtask()
    {
        $data = [
            $services = Service::all(),       
            $mebel = Mebel::all()       
        ];
        return view('createtask')->with('data', $data);
    }


    public function store(Request $request)
    {
        $task = new Task;
        $task->service_id = $request['service_id'];
        $task->mebel_id = $request['mebel_id'];
        $task->status_id = 1;
        $task->save();
        return redirect('/tasks/create');
    }


    public function show(Task $task)
    {
        //
    }

    public function userboard(Task $task)
    {
        $tasks = Task::all()->sortByDesc("updated_at");
        return view('userboard')->with('tasks', $tasks);    
    }


    public function edit(Task $task)
    { 
        $this->middleware('admin');        
        
      $statuses = Status::all();	
      return view('admin.edittask')->with(['task'=>$task, 'statuses'=>$statuses]);
    }


    public function update(Request $request, Task $task)
    {
			$task->status_id = $request['status_id'];
			$task->save();
			return redirect('/tasks');	
    }


    public function destroy(Task $task)
    {
        //
    }
}
