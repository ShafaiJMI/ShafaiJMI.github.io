    @extends('layouts.base')
    @section('title')
    Contact
    @endsection
    @section('content')
    <section class="bg-secondary">
        <div class="py-5">
            <div class="col-10 mx-auto">
                <div class="row">
                    <div class="col-md-6 text-md-center">
                        <div class="card-body">

                            <h1 class="font2">Get in Touch</h1>
                            <p>something about contacting us something about contact</p><br><br>
                            <a class="lh-lg nav-link" href="tel:"><i class="fa fa-mobile-alt fa-2x"></i><br>+91 0000000000</a>
                            <a class="lh-lg nav-link" href="mailto:"><i class="far fa-envelope fa-2x"></i><br>hello@theexecutors.co.in</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow border">
                            <div class="card-body">
                               <form  method="post" action="{{ route('contact.store') }}" id="contactform">
                                @csrf
                                <div class="form-group">
                                    <label ></label>
                                    <input type="text" class="form-control" placeholder="Your Name" name="name" id="name">
                                    @if ($errors->has('name'))
                                    <div class="error">
                                        {{ $errors->first('name') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label></label>
                                    <input type="email" class="form-control" placeholder="example@example.com" name="email" id="email">
                                    @if ($errors->has('email'))
                                    <div class="error">
                                        {{ $errors->first('email') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="+91 0000000000" name="phone" id="phone">
                                    @if ($errors->has('phone'))
                                    <div class="error">
                                        {{ $errors->first('phone') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Subject" name="subject" id="subject">
                                    @if ($errors->has('subject'))
                                    <div class="error">
                                        {{ $errors->first('subject') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label></label>
                                    <textarea class="form-control" name="message" placeholder="Your message" id="message" rows="4"></textarea>
                                    @if ($errors->has('message'))
                                    <div class="error">
                                        {{ $errors->first('message') }}
                                    </div>
                                    @endif
                                </div>
                                <input type="submit" name="send" value="Submit" class="btn my-2 btn-primary shadow-sm">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="background-image: url('img/abstract-lines.jpg');background-size: 100%;background-repeat:no-repeat;">
    <div class="container py-2">
        <h1 class="font2 fw-bold text-light">WORK WITH US</h1>
        <div class="row cols-3 g-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Apply for</h5>
                        <a href="">Apply <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Apply for</h5>
                        <a href="">Apply <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5>Apply for</h5>
                        <a href="">Apply <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection