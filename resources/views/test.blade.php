@extends('layouts.app')
@section('content')

<link href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css" rel="stylesheet">
 <section class="content-header">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><center>Manage Data</center></div>

                <div class="panel-body">
                    <div class="table-responsive">
                    <table class="table table-bordered datatable">
                    <thead>
                    	<tr>
                    		<td>Sr.No</td>
                    		<td>First Name</td>
							<td>Last Name</td>
							<td>User Name</td>
							<td>Emait</td>
							<td>Contact</td>
                            <td>Gender</td>
                            <td>DOB</td>
                            <td>Manage</td>
                            </tr>
                            </thead>
                            <tbody>
                    	@foreach($test as $b)
                    	<tr>
                    		<td>{{$b->id}}</td>
							<td>{{$b->name}}</td>
                    		<td>{{$b->last_name}}</td>
                    		<td>{{$b->username}}</td>
                    		<td>{{$b->email}}</td>
                            <td>{{$b->contact}}</td>
                             <td>{{$b->gender}}</td>
                            <td>{{$b->dob}}</td>
					<td>
					<a href="{{url('/test/delete',$b->id)}}" class="btn btn-danger">Delete</a>
					<a href="{{url('edit/edit',$b->id)}}" class="btn btn-success">Edit</a>
					</td>		
				
                            </tr>

				
                    	
                    	@endforeach
                        </tbody>
                    </table>

</div>
                </div>
            </div>
        </div>

    </div>
    
</div>

<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
  <script>
   
     var table = $('.datatable').DataTable({
          
        });
   
  </script>
    </section>
     
@endsection

