@extends("assign.header")
@section("content")
<div class="card">
 <div class="card-header bg-light">
    <label>Information Task</label>
 </div>
 <form action={{ url("/result/edite/{$employees->id}") }} method="POST">
    @csrf
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <label for="name_emp" class="require">Name Employee : </label><br>
                <input id="name_emp" class="form-control" type="text" name="name_emp" value={{ $employees->name }}>
            </div>
            <div class="col-md-6">
                <label for="lastname_emp" class="require">Last Name : </label><br>
                <input id="lastname_emp" class="form-control" type="text" name="lastname_emp" value={{ $employees->lastname }}>
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
</div>
@stop 