@extends('layouts.app')

@section('content')
	<a href="/"><button type="button" class="btn btn-dark">Go Back</button></a>
	<br><hr>
	<div class="card">
		<div class="card-body bg-light">
			<h5 id="TodoList1" class="font-weight-bold">
				{{ $todo->text }}
				&nbsp; 
				<small class="alert alert-danger DueDate1"><strong>{{ $todo->due }}</strong></small>
			</h5>
			<hr>
			<p id="TodoBody">{{ $todo->body }}</p>
			<hr>
			<a href="/todo/{{ $todo->id }}/edit"><button type="button" class="btn btn-outline-primary"><b>EDIT</b></button></a>
			{!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'float-right']) !!}
				<div>
					{{Form::hidden('_method', 'DELETE')}}
					{{Form::submit('DELETE', ['class'=> 'btn btn-outline-danger'])}}
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection