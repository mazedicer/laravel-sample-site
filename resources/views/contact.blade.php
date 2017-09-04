@extends('layouts.app')
@section('content')
<div class="container">
<h1>Contact</h1>
{!! Form::open(['ur'=>'contact/submit']) !!}
<div class="form-group">
	{{Form::label('name','Name')}}
	{{Form::text('name','',['placeholder'=>'Enter name','class'=>'form-control'])}}
</div>
<div class="form-group">
	{{Form::label('email','Email Address')}}
	{{Form::text('email','',['placeholder'=>'example@gmail.com','class'=>'form-control'])}}
</div>
<div class="form-group">
	{{Form::label('message','Message')}}
	{{Form::textarea('message','',['placeholder'=>'Enter message here','class'=>'form-control'])}}
</div>
<div>
	{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
</div>
{!! Form::close() !!}
</div>
@endsection
