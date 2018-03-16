@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
            
                <div class="panel-heading">User Data</div>

                <div class="panel-body">
                  
 

 <form action={{url('/test/update')}}  role="form" enctype="multipart/form-data" method="POST">
 {{csrf_field()}}
  <div class="row">
  <div class="col-md-6">
 <div class="form-group ">
  <label for="example-name-input" >Id</label>
    <input class="form-control" type="text" value="{{$showr->id}}" id="example-name-input" name="id" readonly = 'true'>
  </div>
</div>
</div>
<div class="row">
 <div class="col-md-6">
 <div class="form-group ">
  <label for="example-name-input" >First Name</label>
    <input class="form-control" type="text" value="{{$showr->name}}" id="example-name-input" name="name">
  </div>
</div>
<div class="col-md-6">
<div class="form-group">
  <label for="example-name-input" >Last Name</label>
    <input class="form-control" type="text" value="{{$showr->last_name}}" id="example-name-input" name="last_name">
  </div>
</div>
</div>
  <div class="row">
 <div class="col-md-6">
 <div class="form-group ">
  <label for="example-no.-input" >User Name</label>
    <input class="form-control" type="text" value="{{$showr->username}}" id="example-no.-input" name="username">
  </div>
</div>
<div class="col-md-6">
<div class="form-group">
  <label for="classSelect1" >Email</label>
     <input class="form-control" type="text" value="{{$showr->email}}"  name="email">
  </div>
</div>
</div>

 <div class="row">
 <div class="col-md-6">
 <div class="form-group ">
  <label for="example-tel-input" > Contact </label>
    <input class="form-control" type="text" value="{{$showr->contact}}" id="example-tel-input" name="contact">
  </div>
</div>
<div class="col-md-6">
<div class="form-group">
  <label for="example-no.-input" >Gender</label>
    <input class="form-control" type="text" value="{{$showr->gender}}" id="example-no.-input" name="gender">
  </div>
</div>
</div>

 <div class="row">
 <div class="col-md-6">
 <div class="form-group ">
  <label for="example-number-input" >DOB</label>
    <input class="form-control" type="date" value="{{$showr->dob}}" name="dob">
  </div>
</div>
<div class="col-md-6">
 <div class="form-group ">
  <label for="example-no.-input" >Status</label>
    <input class="form-control" type="number" value="{{$showr->status}}" name="status">
  </div>
</div>
</div>

<button type="submit" class="btn btn-primary">Update</button>
</form>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
