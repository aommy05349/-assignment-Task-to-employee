@extends("assign.header")
@section("content")
<div class="card">
 <div class="card-header bg-light">
    <label>Search Task by Employee ID</label>
 </div>
 <form action="{{  url('/search/task') }}" method="POST">
    @csrf
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                    <select name="employee_id" class="form-control">
                            @foreach($employees as $employee)
                                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                            @endforeach
                        </select>
                {{--  <input  class="form-control" type="text" name="emp_id">  --}}

            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-10 "></div>
         <div class="col-md-2 ">
             <button type="submit" class="btn btn-rounded btn-info">ค้นหา</button>
            
         </div>
        </div>
    </div>
  </form>
</div>
    {{-- @yield("search") --}}
@stop 