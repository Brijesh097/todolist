@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-sm-2">
			
		</div>
		<div class="col-sm-8">
			<hr>
			<h2>
				<strong>
					&#9745; Edit todo...
				</strong>
			</h2>
			<hr>
			{!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'PUT']) !!}
				<div class="form-group">
				  {{Form::label('text', 'Text')}}
				  {{Form::text('text', $todo->text, ['class' => 'form-control', 'placeholder' => 'Enter the title'])}}
				</div>
				<div class="form-group">
				  {{Form::label('DueDate', 'Due Date')}}
				  {{Form::text('DueDate', $todo->due, ['class' => 'form-control', 'placeholder' => 'Enter the due date'])}}
				</div>
				<div class="form-group">
				  {{Form::label('body', 'Body')}}
				  {{Form::textarea('body', $todo->body, ['class' => 'form-control', 'placeholder' => 'Enter the todo...', 'rows' => '6'])}}
				</div>
				<div>
				  {{Form::submit('EDIT', ['class'=> 'btn btn-dark'])}}
				  <a href="/todo/{{ $todo->id }}"><button type="button" class="btn btn-outline-dark float-right">BACK</button></a>
				</div>
			{!! Form::close() !!}
		</div>
		<div class="col-sm-2">
			
		</div>
	</div>
@endsection