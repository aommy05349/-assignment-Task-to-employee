@extends("assign.header")
@section("content")
     <div class="card-header bg-light">
        <label>Assign Task to Employee</label>
     </div>
     <form action="{{ url("/ass/") }}" method="POST">
        @csrf
     <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <select name="employee_id" class="form-control">
                        @foreach($employees as $employee)
                            <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <select name="task_id" class="form-control">
                        @foreach($tasks as $task)
                            <option value="{{ $task->id }}">{{ $task->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-10 "></div>
             <div class="col-md-2 ">
                 <input type="submit" class="btn btn-rounded btn-info ">
             </div>
            </div>
        </div>
    </form>
@stop