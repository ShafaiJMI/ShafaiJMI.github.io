<!--<header class="navbar bg-primary">
       <div class="d-inline-block px-4">
        <a class="navbar-brand" href="#"><img src="{{ asset('img/favicon-32x32.png') }}"></a>
      </div>
    <ul class="navbar-nav flex-row flex-wrap">
       <li class="px-3 nav-item text-light"><i class="text-light fa fa-phone-alt"></i><a class="nav-link text-light" href="tel:9718163239">9718163239 </a></li>
       <li class="px-3 nav-item"><i class=""></i><a class="nav-link text-light" href="mailto:hello@theexecutors.co.in">  hello@theexecutors.co.in</a></li>
   </ul>
 </header>-->

 <nav class="sidemenu">

  <br><br>
  <div class="side-btn" onclick="navToggle()">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
  </div>
  <!-- <span style="margin-left:20px;font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>-->
  <div id="menu">
    <div class="container">
      <div  id="disappear" class="row">
        <div class="mt-5 col-md-4">
         <ul class="text-light h2 float-center fw-bold" style="list-style: none;">
           <li class="py-3 float-center nav-item"><a class="nav-link" href="{{ url('about') }}">WHO ARE WE</a></li>
           <li class="py-3 nav-item"><a class="nav-link" href="{{ url('services') }}">WHAT WE DO</a></li>
           <li class="py-3 nav-item"><a class="nav-link" href="{{ url('events') }}">OUR WORK</a></li>
           <li class="py-3 nav-item"><a class="nav-link" href="{{ url('contact') }}">CONTACT US</a></li>
         </ul>
         <a class=" text-md-center" href="{{ url('/') }}"><i class="fas fa-long-arrow-alt-left"></i> back to home</a>
       </div>
       <div class="mt-5 col-md-6 text-light text-md-center" id="p-slideup" onload="">
       <h3 class="display-6">let's work Together</h3><br><br>
        <p class="">call us: <a href="">+91 9999999999</a></p>
       <p class="">write to us: <a href="">hello@theexecutors.co.in</a></p>
     </div>
   </div>
  </div>
</div>
</nav>
<a href="#" class="brandfloat">
  <img class="brand-btn" src="{{ asset('img/x.png') }}">
</a>