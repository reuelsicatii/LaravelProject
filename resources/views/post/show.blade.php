@extends('layouts.app')

@section('content')
    <a href="/post" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <small>Written on {{$post->created_at}}</small>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    
    {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-left'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-default'])}}
    {!!Form::close()!!}
    
    <a class="btn btn-default" href="/post/{{$post->id}}/edit">Edit</a>
@endsection