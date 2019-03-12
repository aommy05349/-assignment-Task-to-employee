<?php
namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Controllers\storeTaskController\Requests;
use Illuminate\Http\Request;



class storeTaskController extends Controller
{
    public function index(){
        return view('assign.task.storetask');
    }
    public function store(Request $request){
        //dd($request);
        $tasks = new Task;       
        $tasks->name = $request->name_task;
        $tasks->save();
       
        return redirect('/view/task/' . $tasks->id);     
    }
    public function view($id){
        $tasks = Task::all();
        
        return view('assign.task.viewtask',['tasks' => $tasks]);
    }
}
