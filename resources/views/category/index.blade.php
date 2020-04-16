@extends('layouts.app')

@section('content')
    <h1>Category</h1>
    @if(count($categories) > 0)
        @foreach($categories as $category)
            <div class="well">
                <div class="row">
                @if(!empty($category->cover_image))
                     <div class="col-md-4 col-sm-4">
                        <img style="width:25%; height:25%" src="/storage/cover_images/{{$category->cover_image}}">
                    </div>
                @else
                     <div class="col-md-4 col-sm-4">
                        <img style="width:25%; height:25%" src="/storage/cover_images/noimage.jpg">
                    </div>
                @endif
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/category/{{$category->id}}">{{$category->title}}</a></h3>
                        <small>Written on {{$category->created_at}} by {{$category->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No categories found</p>
    @endif
@endsection