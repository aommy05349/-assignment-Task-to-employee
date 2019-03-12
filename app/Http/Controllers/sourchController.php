<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Task;

class sourchController extends Controller
{
    public function indexemp(Request $request){
        $employees = Employee::all();
        return view('assign.sourch.byEmp',compact(['employees']));
    }
    public function searchtask(Request $request){
        $emp_id = $request->employee_id;
        $tasks= Employee::find($emp_id)->tasks;
        // dd($tasks);
         return view('assign.sourch.viewEmp',  compact(['tasks']));
    }

    public function indextask(Request $request){
        $tasks = Task::all();
        return view('assign.sourch.byTask', compact(['tasks']));
    }

    public function searchemp(Request $request){
        $task_id = $request->task_id;
        $emps= Task::find( $task_id)->employees;
         return view('assign.sourch.viewTask', compact(['emps']));
    }
}
