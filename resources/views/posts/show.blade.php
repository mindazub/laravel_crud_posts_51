@extends('layouts.master')

@section('content')

<div class="row">
	<div class="container">
		
		<div>
			{{ $post->title }}				
		</div>

		<span>{{ $post->user->name }}</span>

		<p>
			{{ $post->body }}				
		</p>

	</div>
</div>

<a class="btn btn-sm btn-default" href="{{ url('/') }}">
	Back
</a>

<a class="btn btn-sm btn-info" href="{{ route('posts.edit', [$post->id]) }}">
	Edit
</a>

	
{!! Form::open(['route' => ['posts.destroy', $post->id], 'class' => 'btn btn-sm btn-danger', 'method' => 'delete']) !!}
	{!! Form::submit('Delete') !!}
{!! Form::close() !!}



@stop