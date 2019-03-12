@extends("assign.header")
@section("content")
<div class="card">
 <div class="card-header bg-light">
    <label>List of Task</label>
 </div>
 <form action="#" method="GET">
    @csrf
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($emps as $emp )
                <tr>
                    <td>{{ $emp->id }}</td>
                    <td class="text-nowrap">{{ $emp->name }}</td>
                @endforeach
                </tr>
                </tbody>
            </table>
        </div>  
    </div>
  </form>
</div>
@stop 
