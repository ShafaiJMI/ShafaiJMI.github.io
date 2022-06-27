@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card shadow rounded-3">
		<div class="card-body">
			<form method="post" action="{{ route('event.store') }}">
				@csrf
				<input type="text" name="title" class="form-control" value="{{ old('title') }}">
				<input type="text" name="category_name" class="form-control" value="{{ old('category_name') }}">
				<input type="file" name="image" class="form-control" value="{{ old('image') }}">
				<textarea name="description" class="form-control" value="{{ old('description') }}"></textarea>
				<button class="btn btn-secondary" type="submit">Save</button>
			</form>
		</div>
	</div>
</div>
@endsection