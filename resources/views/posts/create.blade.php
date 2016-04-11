@extends('layouts.master')

@section('content')

<div class="container">
	
	<h1>CREATE A POST:</h1>


	{!! Form::open(['method'=>'POST', 'action' => 'PostsController@store']) !!}

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

			{!! Form::hidden('user_id', '1') !!}
		

	<button type="submit" class="btn btn-success">Save Changes</button>

	{!! Form::close() !!}

</div>

@stop