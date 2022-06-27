@extends('backend.app')
@section('content')
<div class="container">
	<div class="card shadow rounded-3">
		<div class="card-body">
			<form method="post" action="{{ route('service.store') }}">
				@csrf
				<div class="mb-3">
				<input type="text" name="title" placeholder="title" class="form-control" value="{{ old('title') }}">
				@if ($errors->has('title'))
                        <div class="error">
                            {{ $errors->first('title') }}
                        </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="category_name">
                            <option selected>Select Category</option>
                            @foreach($servicecategory as $category)
                            <option value="{{ $category->title }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
				@if ($errors->has('category_name'))
                        <div class="error">
                            {{ $errors->first('category_name') }}
                        </div>
                        @endif
                    </div>
                    <div class="mb-3">
				<input type="file" name="image" placeholder="image" class="form-control" value="{{ old('image') }}">
				@if ($errors->has('image'))
                        <div class="error">
                            {{ $errors->first('image') }}
                        </div>
                        @endif
                    </div>
                    <div class="mb-3">
				<textarea placeholder="description"  name="description" class="form-control"></textarea>
				@if ($errors->has('description'))
                        <div class="error">
                            {{ $errors->first('description') }}
                        </div>
                        @endif
                    </div>
				<button class="btn btn-secondary" type="submit">Save</button>
			</form>
		</div>
	</div>
</div>
@endsection