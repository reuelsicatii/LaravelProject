@extends('layouts.app')

@section('content')
    <a href="/post" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <small>Written on {{$post->created_at}}</small>
@endsection