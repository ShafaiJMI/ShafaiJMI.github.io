@extends('theme2.base')
@section('content')
@include('theme2/navbar')
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">About Us</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card h-100">
                    <img src="{{ asset('img/events-wallpaper.jpg') }}">
                    <div class="card-body">
                        <h4 class="my-3">The Executors</h4>
                        <p>Executors are one of the best leading Brand communication & Entertainment company, integrating, strategy, creativity and technology to provide unique experiences.</p>
                        <p>Executors are the experimenters in the events, exhibitions, activations & digital space has been involved in shaping the life experiences for the brand and consumer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="{{ asset('img/events/pexels-thibault.jpg') }}">
                </div>
                <div class="card">
                    <img src="{{ asset('img/events/pexels-isaac.jpg') }}">
                </div>
            </div>
        </div>
        <div class="pt-5">
            <div class="card">
                <div class="row">
            <div class="col-md-6">
                <div class="card-body">
                <h4 class="my-3">Card Title </h4>
                    <p class="">content</p><br><br><br><br>
                    <p>read more >>></p>
                </div>
            </div>
            <div class="col-md-6">
                    <img src="{{ asset('img/events/') }}">
            </div>
        </div>
    </div>
        </div>
    </div>
</section>
@endsection