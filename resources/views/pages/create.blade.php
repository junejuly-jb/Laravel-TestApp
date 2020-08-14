@extends('layouts.app')

@section('content')
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (\Session::has('success'))
    <div class="alert alert-success">
        <p>{{\SESSION::get('success')}}</p>
    </div>
@endif
<form method="post" action="/insert">
    {{ csrf_field() }}
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