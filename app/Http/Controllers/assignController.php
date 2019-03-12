<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Task;

class assignController extends Controller
{
    public function index(Request $request){
        $tasks = Task::all();
        $employees = Employee::all();
        return view('assign.assign.assign' , compact(['employees','tasks']));
    }   


    public function store(Request $request){
        $employee_id = $request->employee_id;
        $task_id = $request->task_id;
        $employee = Employee::find($employee_id);
        $employee->tasks()->attach($task_id);
        return redirect('/' );     
    }
    
}
