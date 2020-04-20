@extends('layouts.app') 

@section('content')
<h1>Category</h1>
    @if(count($categories) > 0) 
    @foreach($categories as $category)
    <div class="well">
    	<div class="row">
    		@if(!empty($category->cover_image))
    		<div class="col-md-4 col-sm-4">
    			<img style="width: 50%; height: 50%"
    				src="/storage/cover_images/{{$category->cover_image}}">
    		</div>
    		@else
    		<div class="col-md-4 col-sm-4">
    			<img style="width: 25%; height: 25%"
    				src="/storage/cover_images/noimage.jpg">
    		</div>
    		@endif
    		<div class="col-md-8 col-sm-8">
    			<h3>
    				<a href="/category/{{$category->id}}">{{$category->title}}</a>
    			</h3>
    			<small>Created on {{$category->created_at}} by
    				{{$category->user->name}}</small> </br> <a class="btn btn-default"
    				href="/service/create">Create Service</a>
    		</div>
    	</div>
    	<hr></hr>
    	<h2>Services</h2>
    	<div class="row">
    		@foreach($services as $service) 
    		@if($category->id ==
    		$service->category_id)
    		<div class="card col-md-4 col-sm-4">
    			<img style="width: 25%; height: 25%"
    				src="/storage/cover_images/{{$service->cover_image}}"
    				class="card-img-top" alt="...">
    			<div class="card-body">
    				<h5 class="card-title">{{$service->title}}</h5>
    				<p class="card-text">{!! $service->description !!}</p>
    				@if(!Auth::guest()) @if(Auth::user()->id == $service->user_id)
    				{!!Form::open(['action' => ['ServiceController@destroy',
    				$service->id], 'method' => 'POST', 'class' => 'pull-left'])!!}
    				{{Form::hidden('_method', 'DELETE')}} {{Form::submit('Delete',
    				['class' => 'btn btn-default'])}} {!!Form::close()!!} <a
    					class="btn btn-default" href="/service/{{$service->id}}/edit">Edit</a>
    				@endif 
    				@endif
    			</div>
    		</div>
    		@endif 
    		@endforeach
    	</div>
    </div>
    @endforeach 
    @else
    <p>No categories found</p>
    @endif 
@endsection
