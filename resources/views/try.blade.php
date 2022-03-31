@extends('layout')
@section('title','TRY')

@section('Header')
<x-header/>
@endsection

@section('container')
<div>
<p>
            <form method="post" action="loginform" enctype="multipart/form-data">
            {{@csrf_field()}}
            <label for="upload">upload Image</label><br>
        
            <input type="file" required  name="doc"/><br>
            <input type="submit"  name="submit" /></form>
            
        </p>
</div>

@endsection
@section('Foot')
<x-footer/>
@endsection