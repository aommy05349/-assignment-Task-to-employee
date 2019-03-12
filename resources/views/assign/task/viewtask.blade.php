@extends("assign.task.storetask")
@section("body")
<div class="card">
    <div class="card-header bg-light">
       <label>List Name Task</label>
    </div>
    <form action="" method="GET">
       @csrf
       <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Task Name</th>
                    <th><label class="fa fa-edit"></label></th>
                    <th><label class="fa fa-trash-alt"></label></th>
                </tr>
                </thead>
                <tbody>
                @foreach($tasks as $task )
                <tr>
                    <td>{{ $task->id }}</td>
                    <td class="text-nowrap">{{ $task->name }}</td>
                    <td>-</td>
                    <td><a href="{{ url("/editemp/{$task->id}") }}  " ><button type="button" class="btn btn-primary">แก้ไข</button></a></td>
                    <td><a href="{{ url("/deletemp/{$task->id}") }} "><button type="button" class="btn btn-primary" >ลบ</button></a></td>
                @endforeach
                </tr>
                </tbody>
            </table>
        </div>
    </div>
     </form>
   </div>

@stop