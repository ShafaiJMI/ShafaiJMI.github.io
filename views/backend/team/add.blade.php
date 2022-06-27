@extends('backend.app')
@section('content')
<div class="container">
	<div class="card shadow rounded-3">
		<div class="card-body">
			<form method="post" action="{{ route('team.store') }}">
				@csrf
				<div class="mb-3"><input type="text" name="name" placeholder="Enter name" class="form-control" value="{{ old('name') }}"/>
					@if ($errors->has('name'))
                        <div class="error">
                            {{ $errors->first('name') }}
                        </div>
                        @endif</div>
				<div class="mb-3"><input type="text" name="role" placeholder="role" class="form-control" value="{{ old('role') }}"/>
					@if ($errors->has('role'))
                        <div class="error">
                            {{ $errors->first('role') }}
                        </div>
                        @endif</div>
				<div class="mb-3"><input type="file" name="image" class="form-control" value="{{ old('image') }}"/>
				@if ($errors->has('image'))
                        <div class="error">
                            {{ $errors->first('image') }}
                        </div>
                        @endif</div>
				<button class="btn btn-secondary" type="submit">Save</button>
			</form>
		</div>
	</div>
</div>
@endsection