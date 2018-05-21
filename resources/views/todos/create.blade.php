@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-sm-7">
			<hr>
			<h2>
				<strong>
					&#9745; Create a todo...
				</strong>
			</h2>
			<hr>
			{!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
				<div class="form-group">
				  {{Form::label('text', 'Text')}}
				  {{Form::text('text', '', ['class' => 'form-control', 'placeholder' => 'Enter the title'])}}
				</div>
				<div class="form-group">
				  {{Form::label('DueDate', 'Due Date')}}
				  {{Form::text('DueDate', '', ['class' => 'form-control', 'placeholder' => 'Enter the due date'])}}
				</div>
				<div class="form-group">
				  {{Form::label('body', 'Body')}}
				  {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Enter the todo...', 'rows' => '6'])}}
				</div>
				<div>
				  {{Form::submit('DONE', ['class'=> 'btn btn-dark'])}}
				</div>
			{!! Form::close() !!}
		</div>
		<div class="col-sm-5">
			{{-- <img src="https://cdn.dribbble.com/users/310943/screenshots/2216022/collaborate-compressor.gif"> --}}
			{{-- <img src="https://cdn.dribbble.com/users/384313/screenshots/2067564/replace.gif"> --}}
			{{-- <img src="https://i.pinimg.com/originals/c8/19/19/c819199ee14f958f0129ed98eff87870.gif"> --}}
			{{-- <img src="https://cdn-images-1.medium.com/max/1600/0*iqzoN1X2uRzqRrbx.gif"> --}}
			{{-- <img src="https://cdn.dribbble.com/users/704067/screenshots/2587048/fb-post-concept-app-icon.gif"> --}}
			<img src="https://cdn.dribbble.com/users/876881/screenshots/2410014/design_800p.gif" width="600">
		</div>
	</div>
@endsection