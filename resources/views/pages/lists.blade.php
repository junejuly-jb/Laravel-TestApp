@extends('layouts.app')

@section('content')

    @foreach ($data as $datum)
        <div class="well">
            <h5>{{$datum->fname}} {{$datum->lname}}</h5>
        </div>
    @endforeach

@endsection
