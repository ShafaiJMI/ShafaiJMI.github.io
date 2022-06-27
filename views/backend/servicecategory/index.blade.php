@extends('backend.app')
@section('content')
<div class="container">
	@foreach($servicecategory as $category)
	<div class="card rounded-border shadow my-1 mx-1">
		<div class="card-body">
			{{ $category->title }}
		</div>
	</div>
	@endforeach
</div>
@endsection