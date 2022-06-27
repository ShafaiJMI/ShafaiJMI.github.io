@extends('layouts.base')
@section('title')
About Us
@endsection
@section('content')
<section class="bg-secondary" id="pageload">
	<div class="container pagetitle font2 text-center">
		<div class="mx-auto"><h1 class="display-1 uppercase fw-bold">WHO ARE WE</h1></div>
	</div>
</section>
<section class="bg-secondary">
	<div class="container">
		<div class="row py-5">
			<h1 class="py-2 font2">WHO ARE WE</h1>
			<div class="col-md-6">
				<p>Executors are one of the best leading Brand communication & Entertainment company, integrating, strategy, creativity and technology to provide unique experiences.</p>
			</div>
			<div class="col-md-6">
				<p>Executors are the experimenters in the events, exhibitions, activations & digital space has been involved in shaping the life experiences for the brand and consumer</p>
			</div>
		</div>
		
		
	</div>
</section>
<section class="bg-primary">
	<div class="container">
	<div class="row py-3">
			<div class="container col-md-5">
				<div class=" bg-light h-100">
					<img src="{{ asset('img/events/pexels-thibault.jpg') }}" class="w-100 h-100">
					
				</div>
			</div>
			<div class="col-md-7">
				<div class="row">
					<div class="">
						<div class="card-body h-100">
							<p class="text-light">Executors are one of the best leading Brand communication & Entertainment company, integrating, strategy, creativity and technology to provide unique experiences.</p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>
<section style="background-color: #f8a51b;">
	<div class="container">
		<div class="row py-4">
			<div class="col-md-8">
				<div class="col-md-4 mx-auto">
					<div class="text-light py-5">
						<h1 class="text-md-center font2">OUR TEAM</h1>
						<p class="text-md-center">meet our team</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
			<div class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="py-1">
							<div class="mx-1 card shadow h-100">
								<div class="row">
									<img src="{{ asset('img/team/1.jpg') }}" class="w-100">
									<div class="card-body">
										<h4 class="font2 fw-bold">Name 1</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integeuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="py-1">
							<div class="mx-1 card shadow h-100">
								<div class="row">
									<img src="{{ asset('img/team/2.jpg') }}" class="w-100">
									<div class="card-body">
										<h4 class="font2 fw-bold">Name 2</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integeuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="py-1">
							<div class="mx-1 card shadow h-100">
								<div class="row">
									<img src="{{ asset('img/team/2.jpg') }}" class="w-100">
									<div class="card-body">
										<h4 class="font2 fw-bold">Name</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integeuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
</section>
<section>
	<div class="">
		<div class="row">
			<div class="col-md-6">
				<div class="card h-100 shadow">
					<div class="row">
						<div class="col-md-6">
							<img src="{{ asset('img/portfolio/01-thumbnail.jpg') }}" class="w-100 h-100">
						</div>
						<div class="col-md-6">
							<div class="card-body">
								<h4 class="my-3 font2">OUR VISION</h4>
								<p class="">Read about our mission and vision</p><br><br><br><br>
								<p>read more >>></p>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card h-100 shadow">
					<div class="row">
						<div class="col-md-6">
							<img src="{{ asset('img/portfolio/01-thumbnail.jpg') }}" class="w-100 h-100">
						</div>
						<div class="col-md-6">
							<div class="card-body">
								<h4 class="my-3 font2">OUR MISSION</h4>
								<p class="">Read about our mission and vision</p><br><br><br><br>
								<p>read more >>></p>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection