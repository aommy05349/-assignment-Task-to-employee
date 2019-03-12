@extends("assign.header")
@section("content")
<div class="card">
    <div class="card-header bg-light">
       <label>List Name Employee</label>
    </div>
    <form action="" method="GET">
       @csrf
       <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Task</th>
                    <th><label class="fa fa-edit"></label></th>
                    <th><label class="fa fa-trash-alt"></label></th>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $employee )
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td class="text-nowrap">{{ $employee->name }}</td>
                    <td class="text-nowrap">{{ $employee->lastname }}</td>
                    <td>-</td>
                    <td><a href="{{ url("/editemp/{$employee->id}") }}  " ><button type="button" class="btn btn-primary">แก้ไข</button></a></td>
                    <td><a href="{{ url("/deletemp/{$employee->id}") }} "><button type="button" class="btn btn-primary" >ลบ</button></a></td>
                @endforeach
                </tr>
                </tbody>
            </table>
        </div>
    </div>
     </form>
   </div>

@stop