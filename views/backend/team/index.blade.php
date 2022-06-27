@extends('backend.app')
@section('content')
<div class="container">
	@foreach($teams as $team)
	<div class="card rounded-3 mx-2 my-2 shadow">
		<div class="card-body">
			<h3>{{$team->name}}</h3>
			<p>{{$team->role}}</p>
			<div>{{$team->image}}</div>
		</div>
	</div>
	
	@endforeach
</div>
@endsection