@extends('layouts.employee-hr-layout')




@section('title', 'HR Employee List')

@section('styles')
<link rel="stylesheet" href="{{ URL::asset('assets/css/normalize.css') }}">
<link rel="stylesheet" href="{{ URL::asset('assets/css/form-styles.css') }}">
@endsection




@section('allemployee')

<div class="container">
  <h3>All Employee</h3>
  
</div>

<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact Number</th>
		 <th>Position</th>
         <th>Join Date</th>
         <th>Active</th>
        <th></th>
		<th></th>
      </tr>
    </thead>
    <tbody>
@foreach($employees as $emp)
<tr>

	<td class="{{$emp->id}}">{{$emp->id}}</td>
	<td><div><img dataField="image" width="20%" src="{{url($emp->image)}}" alt="{{$employee->name}}" class="small user-auth-img img-circle"/></div></td>
	<td >{{$emp->name}}</td>
	<td>{{$emp->email}}</td>
	<td>{{$emp->contact_number}}</td>
	<td>{{$emp->type}}</td>
	<td>{{$emp->created_at}}</td>
	<td> <input class="active" id="active" value="{{$emp->Active}}" type="checkbox"></td>
	
</tr>
@endforeach
     </tbody>
  </table>
  </div>
</div>


@endsection
@section('scripts')

@endsection