<?php

namespace App\Http\Controllers;

use App\Task;
use App\Service; 
use App\Status; 
use App\Mebel; 
use Auth;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    //МЕТОДЫ АДМИНИСТРАТОРА
    
    //выводит список заявок 
    public function index()
    {
        $tasks = Task::all()->sortByDesc("updated_at");
        return view('admin.tasks')->with('tasks', $tasks);
    }
    //страница редактирование заявок
    public function edit(Task $task)
    { 
      $statuses = Status::all();	
      return view('admin.edittask')->with(['task'=>$task, 'statuses'=>$statuses]);
    }

    //PUT запрос на изменение статуса заявки
    public function update(Request $request, Task $task)
    {
			$task->status_id = $request['status_id'];
			$task->save();
			return redirect('/admin');	
    }

    // МЕТОДЫ ПОЛЬЗОВАТЕЛЯ
    //страница создания заявки
    public function createtask()
    {
        if(!Auth::user()->isadmin){
            $data = [
                $services = Service::all(),       
                $mebel = Mebel::all()       
            ];
            return view('createtask')->with('data', $data); 
        } else { 
            return redirect ('/admin');
        }
    }

    //добавление созданной заявки
    public function addtask(Request $request)
    {
        $task = new Task;
        $task->service_id = $request['service_id'];
        $task->mebel_id = $request['mebel_id'];
        $task->status_id = 1;
        $task->save();
        return redirect('/user');
    }

    //список заявок пользователя
    public function userboard(Task $task)
    {
        if(!Auth::user()->isadmin){
            $tasks = Task::all()->sortByDesc("updated_at");
            return view('userboard')->with('tasks', $tasks);    
        } else { 
            return redirect ('/admin');
        }
    }
}
