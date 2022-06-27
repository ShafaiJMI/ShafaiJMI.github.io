@extends('backend.app')
@section('content')
<div class="container">
	@foreach($services as $service)
	<div class="card rounded-border shadow my-1 mx-1">
		<div class="card-body">
			{{ $service->title }}
		</div>
	</div>
	@endforeach
</div>
@endsection