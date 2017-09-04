@extends('layouts.app')
@section('content')

<div class="container">
<div class="row">
	<h1>Welcome to Laravel Sample Site by Mario Carrizales</h1>
</div>
	<div class="row">
		<h2>Sign In</h2>
	</div>
<div class="row">
	{!! Form::open(['url' => 'contact/submit']) !!}
	<div class="form-group">
	{{ Form::label('email', 'E-Mail Address') }}
	{{ Form::text('email', 'example@gmail .com', ['class' => 'form-control']) }}
	</div>
	<div class='form-group'>
	{{ Form::label('password', 'Password') }}
	{{ Form::password('password', ['class' => 'form-control']) }}
	</div>
	<div class='form-group'>
	{{ Form::submit('Sign In' , ['class' => 'btn btn-primary']) }}
	</div>
	{!! Form::close() !!}
</div>
</div>
@endsection
