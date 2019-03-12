@extends("assign.header")
@section("content")
<div class="card">
 <div class="card-header bg-light">
    <label>Search Employee by Task ID</label>
 </div>
 <form action="{{  url('/search/emp') }}" method="POST">
    @csrf
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                    <select name="task_id" class="form-control">
                            @foreach($tasks as $task)
                                <option value="{{ $task->id }}">{{ $task->name }}</option>
                            @endforeach
                    </select>
                {{--  <input  class="form-control" type="text" name="task_id">  --}}

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