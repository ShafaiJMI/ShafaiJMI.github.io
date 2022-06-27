<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

<!-- CSRF Token -->
<meta name="csrf-token" content="NjtBtelVWtnIh1FnmOeQgZA9heAbIRrrFpQZSWTz">

<title>The Executors
</title>
<link rel="dns-prefetch" href="http://fonts.gstatic.com/">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
<link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">
</head>
<body>
  @include('layouts.navbar')
  <div id=app>
    @yield('content')
  </div>
@include('layouts.footer')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
