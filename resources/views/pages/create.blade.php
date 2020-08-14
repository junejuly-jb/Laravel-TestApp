@extends('layouts.app')

@section('content')
<form method="POST" action="{{url('student')}}">
    <div class="form-group">
        <label>Firstname</label>
        <input name="fname" type="text" class="form-control" placeholder="Enter first name">
    </div>
    <div class="form-group">
        <label>Lastname</label>
        <input name="lname" type="text" class="form-control" placeholder="Enter last name">
    </div>
    <input type="submit" class="btn btn-primary">
</form>
@endsection