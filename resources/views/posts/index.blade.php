@extends('layouts.master')


@section('content')

	<div class="container">
		
		<h1>POSTS</h1>

		@if( ! $posts->count())

			<h3>No Posts, Dude.</h3>

		@else

			@foreach($posts as $post)

				<h3>{{ $post->title }}</h3>

				<h5>{{ $post->user->name }}</h5>

				<p>{{ str_limit($post->body, 30) }}</p>

			@endforeach

		@endif

	</div>


@stop