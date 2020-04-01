@extends('layouts.app') 

@section('main_content')
<h1>{{$title}}</h1>

@if(count($contents) > 0)
<ul class="list-group">
	@foreach($contents as $content)
	<li class="list-group-item">{{$content}}</li> 
	@endforeach
</ul>

@endif 
@endsection()
