@extends('layout')
@section('title','Update Details')
@section('Header')
<x-pheader/>
@endsection
@section('container')
<div id="wrapper">
        <div class="clear">
        </div>
        
        <div class="clear">
        </div>
		<form method="post" action="{{route('volunteer.update',[$volunteerArr->id])}}">
		@csrf
		<table id="customer">
	<tr>
		<td> Name</td>
		<td> <input type="text" name="name" value="{{$volunteerArr->name}}"/> </td>
	</tr>
	
	<tr>
	<td>Father Name</td>
	<td> <input type="text" name="fathername" value="{{$volunteerArr->fathername}}"/> </td>
	</tr>
	
	<tr>
	<td>Email</td>
	<td> <input type="text" name="email" value="{{$volunteerArr->email}}"/> </td>
	</tr>
	

	
	<tr>
	<td>Village</td>
	<td> <input type="text" name="village" value="{{$volunteerArr->village}}"/> </td>
	</tr>
	
	<tr>

	<td> <input type="submit" name="submit"/> </td>
	</tr>


</table>
</form>

<x-footer/>
@endsection
