@extends('theme2.base')
@section('content')
@include('theme2/navbar')
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted"></h3>
        </div>
                           
        <form method="post" id="contactForm" name="sentMessage" action="{{ route('contact.store') }}">
            @csrf
            <div class="row align-items-stretch mb-5">
                <div class="col-md-5 text-light">
                    <h1 class="">THE E<span class="text-primary">X</span>ECUTORS</h1><br>
                    <p><i class="fa fa-phone-alt"> </i> +91 9718163239</p>
                    <p><i class="far fa-envelope"> </i> hello@theexecutors.co.in</p>
                    <p><i class="fa fa-map-pin"> </i> Building No. 52-c, Okhla Phase 3, New Delhi - 110020</p>

                </div>
                <div class="col-md-7">
                  <div class="row">
                    <div class="col-md-4 form-group">
                        <input class="form-control" name="name" id="name" type="text" placeholder="Your Name *" />
                        @if ($errors->has('name'))
                        <p class="help-block text-danger">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div class="col-md-4 form-group">
                        <input class="form-control" name="email" id="email" type="email" placeholder="Your Email *" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="col-md-4 form-group">
                        <input class="form-control" name="phone" id="phone" type="tel" placeholder="Your Phone *" />
                        <p class="help-block text-danger"></p>
                        @if ($errors->has('phone'))
                        <div class="error">
                            {{ $errors->first('phone') }}
                        </div>
                        @endif
                    </div>
                </div>
                    <div class="form-group">
                        <input class="form-control" name="subject" id="subject" type="text" placeholder="Subject" />
                        <p class="help-block text-danger"></p>
                        @if ($errors->has('subject'))
                        <div class="error">
                            {{ $errors->first('subject') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group form-group-textarea">
                        <textarea class="form-control" name="message" id="message" placeholder="Your Message *" ></textarea>
                        <p class="help-block text-danger"></p>
                        @if ($errors->has('message'))
                        <div class="error">
                            {{ $errors->first('message') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                             @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible">
        {{Session::get('success')}}
    </div>
    @endif
                <button class="btn col-md-12 btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit" name="send" value="Submit">Send Message</button>
            </div>
                </div>

            </div>
            
        </form>

    </div>
</section>
@endsection