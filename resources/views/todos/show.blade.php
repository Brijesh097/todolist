@extends('layouts.app')

@section('content')
	<a href="/"><button type="button" class="btn btn-dark">Go Back</button></a>
	<br><br>
	<div class="card">
		<div class="card-body bg-light">
			<h5 id="TodoList1" class="font-weight-bold">
				{{ $todo->text }}
				&nbsp; 
				<small class="alert alert-danger DueDate1"><strong>{{ $todo->due }}</strong></small>
			</h5>
			<hr>
			<p id="TodoBody">{{ $todo->body }}</p>
		</div>
	</div>
@endsection