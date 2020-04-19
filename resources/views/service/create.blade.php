@extends('layouts.app')

@section('content')
    <h1>Create Service</h1>
    {!! Form::open(['action' => 'ServiceController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('category', 'Category')}}            
            <select name="category_id">
            @foreach($categories as $category)
				<option value="{{$category->id}}">{{$category->title}}</option>
			@endforeach
			</select>         	
        </div>
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection


Form::select('size', ['L' => 'Large', 'S' => 'Small']);

echo Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Pick a size...']);