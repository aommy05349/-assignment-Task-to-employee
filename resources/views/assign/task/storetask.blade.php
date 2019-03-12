@extends("assign.header")
@section("content")
<div class="card">
 <div class="card-header bg-light">
    <label>Information Task</label>
 </div>
 <form action="{{  url('/store/task') }}" method="POST">
    @csrf
    <div class="card-body">
        <div class="row ">
            <div class="col md-6">
                <label for="name_task" class="require">Name Task : </label><br>
                <input id="name_task" class="form-control" type="text" name="name_task">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 "></div>
         <div class="col-md-2 ">
             <input type="submit" class="btn btn-rounded btn-info ">
         </div>
        </div>
    </div>
  </form>
</div>
<div class="row mt-4">
        <div class="col-12">
            @yield("body")
        </div>
    </div>
@stop 