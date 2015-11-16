@extends('layouts.master')


@section('content')

	<div class="container">
		
		<h1>POSTS</h1>
		<span>Download all posts <a href="{{ url('/download') }}">here</a></span>
		<br>
		<span>Upload all posts <a href="{{ url('/upload') }}">here</a></span>
		<br>
		<span><a href="#">Administrate</a> your posts here</span>

		@if( ! $posts->count())

			<h3>No Posts, Dude.</h3>

		@else

			@foreach($posts as $post)

				<h3>{{ $post->title }}</h3>

				<h5>{{ $post->user->name }}</h5>

				<p>{{ str_limit($post->body, 30) }}</p>


			@endforeach

			{!!  $posts->render() !!}
			
		@endif

	</div>


@stop