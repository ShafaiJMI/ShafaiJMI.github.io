@extends('layouts.base')
@section('title')
Services
@endsection
@section('content')
<section>
	<div class="bg-secondary" id="pageload">
		<div class="container pagetitle font2 text-center">
			<div class="mx-auto"><h1 class="display-1 uppercase fw-bold">WHAT WE DO</h1></div>
		</div>
	</div>
</section>
<section class="bg-secondary">
	<div class="container py-5 cols-md- g-4">
		<h6>What we do</h6>
		<p class="py-5 font2 h2">We offers’ end to end marketing solutions using an integrated
		approach involving: corporate branding solutions from Conceptualizing to execution.</p>
		<div class="row font2">
			@foreach($services as $service)
			<div class="col-md-4 py-2 mx-auto">
				<div class="h-100 card bg-secondary mx-2">
					<div class="h-100">
						<img src="{{ asset('img/portfolio/01-thumbnail.jpg') }}" class="w-100">
						<div class="card-body">
							<h4 class="fw-bold">{{ $service->title}}</h4>
							<p>... .... .... ...</p>
							<button class="btn btn-primary border-0">Learn more</button>
						</div>
						
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<section style="background-image: url('img/pexels-helena.jpg');background-size: 100%;background-repeat: no-repeat;">
	<div class="container">
		<h1 class="fw-bold text-md-center text-light font2">OUR WORK</h1>
		<div class="row">
			@foreach($works as $work)
			<div class="col-md-3 card shadow mx-2 my-2">
				<div class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img src="{{ asset('img/portfolio/01-thumbnail.jpg') }}" class="card-img-top" alt="..." style="width: 100%;">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/portfolio/02-thumbnail.jpg') }}" class="card-img-top" alt="..." style="width: 100%;">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/portfolio/03-thumbnail.jpg') }}" class="card-img-top" alt="..." style="width: 100%;">
              </div>
            </div>
          </div>
				<div class="card-body">
					<h6>{{ $work->title }}</h6>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
@endsection