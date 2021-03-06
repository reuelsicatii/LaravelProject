@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                @if(!empty($post->cover_image))
                     <div class="col-md-4 col-sm-4">
                        <img style="width:25%; height:25%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                @else
                     <div class="col-md-4 col-sm-4">
                        <img style="width:25%; height:25%" src="/storage/cover_images/noimage.jpg">
                    </div>
                @endif
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/post/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
@endsection