@extends('layouts.base')
@section('title')
Events
@endsection
@section('content')
<section class="bg-secondary" id="pageload">
	<div class="container pagetitle font2 text-center">
		<div class="mx-auto"><h1 class="display-1 uppercase fw-bold">OUR WORK</h1></div>
	</div>
</section>
  <section class="bg-light">
    <carousel :items="1" :autoplay="true" :dircections="up" :mouse-drag="false" :nav="false" :dots="false">
      <img src="{{ asset('img/pexels-nicole.jpg') }}" class="w-100" alt="...">
      <img src="{{ asset('img/carousel-3.png') }}" class="w-100" alt="...">
    </carousel>
  </section>
<section class="bg-secondary py-5">
<div class="container float-center">
	<div class="row">
		<div class="col-md-4">
			<figure class="c-tile c-tile--bottom">
                <picture>
                  <img src="{{ asset('img/portfolio/02-thumbnail.jpg') }}" class="" style="width: 100%;" alt="Branding and marketing for the RSPB" />
                </picture>
                <figcaption class="h-100 c-tile__overlay">
                  <div class="c-panel c-panel--darkover">
                    <header class="c-panel__header">
                      <h1 class="c-panel__title">
                        RSPB Biosecurity for LIFE, Edinburgh
                      </h1>
                    </header>
                    <div class="c-panel__content">
                      <span class="c-btn-text c-btn-text--reverse">
                        Supporting the RSPB to protect our nation's seabirds from invasive predators
                      </span>
                    </div>
                  </div>
                </figcaption>
        </figure>
        <figure class="c-tile c-tile--bottom">
                <picture>
                  <img src="{{ asset('img/portfolio/03-thumbnail.jpg') }}" class="" style="width: 100%;" alt="Branding and marketing for the RSPB" />
                </picture>
                <figcaption class="h-100 c-tile__overlay">
                  <div class="c-panel c-panel--darkover">
                    <header class="c-panel__header">
                      <h1 class="c-panel__title">
                        RSPB Biosecurity for LIFE, Edinburgh
                      </h1>
                    </header>
                    <div class="c-panel__content">
                      <span class="c-btn-text c-btn-text--reverse">
                        Supporting the RSPB to protect our nation's seabirds from invasive predators
                      </span>
                    </div>
                  </div>
                </figcaption>
        </figure>
		</div>
		<div class="col-md-4">
      <figure class="c-tile c-tile--bottom">
                <picture>
                  <img src="{{ asset('img/portfolio/02-thumbnail.jpg') }}" class="" style="width: 100%;" alt="Branding and marketing for the RSPB" />
                </picture>
                <figcaption class="h-100 c-tile__overlay">
                  <div class="c-panel c-panel--darkover">
                    <header class="c-panel__header">
                      <h1 class="c-panel__title">
                        RSPB Biosecurity for LIFE, Edinburgh
                      </h1>
                    </header>
                    <div class="c-panel__content">
                      <span class="c-btn-text c-btn-text--reverse">
                        Supporting the RSPB to protect our nation's seabirds from invasive predators
                      </span>
                    </div>
                  </div>
                </figcaption>
        </figure>
        <figure class="c-tile c-tile--bottom">
                <picture>
                  <img src="{{ asset('img/portfolio/01-thumbnail.jpg') }}" class="" style="width: 100%;" alt="Branding and marketing for the RSPB" />
                </picture>
                <figcaption class="h-100 c-tile__overlay">
                  <div class="c-panel c-panel--darkover">
                    <header class="c-panel__header">
                      <h1 class="c-panel__title">
                        RSPB Biosecurity for LIFE, Edinburgh
                      </h1>
                    </header>
                    <div class="c-panel__content">
                      <span class="c-btn-text c-btn-text--reverse">
                        Supporting the RSPB to protect our nation's seabirds from invasive predators
                      </span>
                    </div>
                  </div>
                </figcaption>
        </figure>
    </div>
		<div class="col-md-4">

			<figure class="c-tile c-tile--bottom">
                <picture>
                  <img src="{{ asset('img/portfolio/01-thumbnail.jpg') }}" class="" style="width: 100%;" alt="Branding and marketing for the RSPB" />
                </picture>
                <figcaption class="h-100 c-tile__overlay">
                  <div class="c-panel c-panel--darkover">
                    <header class="c-panel__header">
                      <h1 class="c-panel__title">
                        RSPB Biosecurity for LIFE, Edinburgh
                      </h1>
                    </header>
                    <div class="c-panel__content">
                      <span class="c-btn-text c-btn-text--reverse">
                        Supporting the RSPB to protect our nation's seabirds from invasive predators
                      </span>
                    </div>
                  </div>
                </figcaption>
        </figure>
        <figure class="c-tile c-tile--bottom">
                <picture>
                  <img src="{{ asset('img/portfolio/02-thumbnail.jpg') }}" class="" style="width: 100%;"  alt="Branding and marketing for the RSPB" />
                </picture>
                <figcaption class="h-100 c-tile__overlay">
                  <div class="c-panel c-panel--darkover">
                    <header class="c-panel__header">
                      <h1 class="c-panel__title">
                        RSPB Biosecurity for LIFE, Edinburgh
                      </h1>
                    </header>
                    <div class="c-panel__content">
                      <span class="c-btn-text c-btn-text--reverse">
                        Supporting the RSPB to protect our nation's seabirds from invasive predators
                      </span>
                    </div>
                  </div>
                </figcaption>
        </figure>
		</div>
	</div>
</div>
</section>
<section class="bg-light">
  <div class="container py-5">
    <agile ref="main" :fade="true" indicator="false">
      <img src="{{ asset('img/portfolio/01-thumbnail.jpg') }}" class="w-100">
      <img src="{{ asset('img/portfolio/02-thumbnail.jpg') }}" class="w-100">
      <img src="{{ asset('img/portfolio/03-thumbnail.jpg') }}" class="w-100">
      <img src="{{ asset('img/portfolio/02-thumbnail.jpg') }}" class="w-100">
      <img src="{{ asset('img/portfolio/01-thumbnail.jpg') }}" class="w-100">
      <img src="{{ asset('img/portfolio/02-thumbnail.jpg') }}" class="w-100">
      <img src="{{ asset('img/portfolio/03-thumbnail.jpg') }}" class="w-100">
      <img src="{{ asset('img/portfolio/02-thumbnail.jpg') }}" class="w-100">
    </agile>
    <agile ref="thumbnails" :as-nav-for="[$refs.main]" :slides-to-show="4" autoplay>
      <img src="{{ asset('img/portfolio/01-thumbnail.jpg') }}" class="h-100">
      <img src="{{ asset('img/portfolio/02-thumbnail.jpg') }}" class="h-100">
      <img src="{{ asset('img/portfolio/03-thumbnail.jpg') }}" class="h-100">
      <img src="{{ asset('img/portfolio/02-thumbnail.jpg') }}" class="h-100">
      <img src="{{ asset('img/portfolio/01-thumbnail.jpg') }}" class="h-100">
      <img src="{{ asset('img/portfolio/02-thumbnail.jpg') }}" class="h-100">
      <img src="{{ asset('img/portfolio/03-thumbnail.jpg') }}" class="h-100">
      <img src="{{ asset('img/portfolio/02-thumbnail.jpg') }}" class="h-100">
    </agile>
  </div>
</section>
@endsection