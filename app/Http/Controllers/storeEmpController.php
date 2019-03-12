<?php
namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Controllers\storeEmpController\Requests;
use Illuminate\Http\Request;



class storeEmpController extends Controller
{
    public function index(){
        return view('assign.emp.storemp');
    }
    public function store(Request $request){
        $employees = new Employee;       
        $employees->name = $request->name_emp;
        $employees->lastname = $request->lastname_emp;
        $employees->save();
        // dd($employees); 
        return redirect('/view/emp/'. $employees->id);        
    }
    public function view($id){
        $employees = Employee::all();
        return view('assign.emp.viewemp',['employees' => $employees]);
    }
    public function edite(Request $request,$id){
        //dd($id);
        $employees = Employee::find($id);
       // dd($employees);
        return view('assign.emp.edite',['employees'=>$employees]);
    }

    public function resultedite(Request $request,$id){
        $employees = Employee::find($id);
        $employees->name = $request->name_emp;
        $employees->lastname = $request->lastname_emp;
        $employees->save();
        //dd($employees);
        return redirect('editemp/'. $employees->id);
    }

    public function delete($id){
        $employees = Employee::find($id);
        $employees ->delete();
        return redirect('/');
    }
}
