@extends('layouts.app')

@section('content')
    <a href="/post" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <small>Written on {{$post->created_at}}</small>
    <br>
    @if(!empty($post->cover_image))
    <img style="width:auto; height:auto" src="/storage/cover_images/{{$post->cover_image}}">
    @else
    <img style="width:auto; height:auto" src="/storage/cover_images/noimage.jpg">
    @endif
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
	@if(!Auth::guest()) 
	@if(Auth::user()->id == $post->user_id)
    {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-left'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-default'])}}
    {!!Form::close()!!}
    
    <a class="btn btn-default" href="/post/{{$post->id}}/edit">Edit</a>
	@endif 
	@endif 
@endsection