@extends('layouts.app')

@section('content')
	<div class="card bg-light">
		<h2 class="card-header"><strong>&#9745; Todos...</strong></h2>
		<div class="card-body">
			@if(count($todos) > 0)
				@foreach($todos as $todo)
					<div class="card">
						<div class="card-body bg-light">
							<h5 id="TodoList" class="font-weight-bold">
								{{ $todo->text }}
								&nbsp; 
								<small class="alert alert-danger DueDate"><strong>{{ $todo->due }}</strong></small>
							</h5>
						</div>
					</div>
				@endforeach
			@endif
		</div>
	</div>
@endsection