@extends('layouts.master')

@section('content')

{!! Form::model($post, array('method' => 'PATCH', 'route' => array('posts.update', $post->id))) !!}

	<div>
	    {!! Form::label('title', 'Title:') !!}
	    {!! Form::text('title', null, ['class'=>'form-control']) !!}
	</div>
	<div>
	    {!! Form::label('body', 'Body:') !!}
	    {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
	</div>
	<br/><br/>
	<div>
	
	<br/><br/>
	</div>

	<button type="submit" class="btn btn-success">Save Changes</button>

{!! Form::close() !!}


@stop
