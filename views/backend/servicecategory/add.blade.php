@extends('backend.app')
@section('content')
<div class="container">
	<div class="card shadow rounded-3">
		<div class="card-body">
			<form method="post" action="{{ route('servicecategory.store') }}">
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
				<input type="text" name="slug" placeholder="slug" class="form-control" id="slug" value="{{ old('slug') }}">
				@if ($errors->has('category_name'))
                        <div class="error">
                            {{ $errors->first('slug') }}
                        </div>
                        @endif
                    </div>
				<button class="btn btn-secondary" type="submit">Save</button>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
    
</script>
@endsection