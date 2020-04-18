@extends('layouts.app')

@section('content')
    <a href="/category" class="btn btn-default">Go Back</a>
    <h1>{{$category->title}}</h1>
    <small>Created on {{$category->created_at}}</small>
    <br>
    @if(!empty($category->cover_image))
    <img style="width:auto; height:auto" src="/storage/cover_images/{{$category->cover_image}}">
    @else
    <img style="width:auto; height:auto" src="/storage/cover_images/noimage.jpg">
    @endif
    <br><br>
    <div>
        {!!$category->description!!}
    </div>
    <hr>
	@if(!Auth::guest()) 
	@if(Auth::user()->id == $category->user_id)
    {!!Form::open(['action' => ['CategoryController@destroy', $category->id], 'method' => 'POST', 'class' => 'pull-left'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-default'])}}
    {!!Form::close()!!}
    
    <a class="btn btn-default" href="/category/{{$category->id}}/edit">Edit</a>
	@endif 
	@endif 
@endsection