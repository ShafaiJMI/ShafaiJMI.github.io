@extends('app')
@section('content')
<div class="container">
	@foreach($events as $event)
	<div class="card rounded-3 shadow my-1 mx-1">
		<div class="card-body">
			{{ $event->title }}
		</div>
	</div>
	@endforeach
</div>
@endsection