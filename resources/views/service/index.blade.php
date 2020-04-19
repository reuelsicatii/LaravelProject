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
				{{$category->user->name}}</small>
		</div>
	</div>
	<hr></hr>
	<div class="row">
	@foreach($services as $service)
	@if($category->id == $service->category_id)
		<div class="card col-md-4 col-sm-4">
			<img style="width: 25%; height: 25%" src="/storage/cover_images/{{$service->cover_image}}" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">{{$service->title}}</h5>
				<p class="card-text">{{$service->description}}</p>
				<a href="/service/{{$service->id}}" class="btn btn-primary">Go somewhere</a>
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
