<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 CRUD Application - laravelcode.com</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div
    class="bg-image d-flex justify-content-center align-items-center" style="background-image: url('/images/bg.jpg');
          background-position: center;
           background-repeat: no-repeat;
           background-size: cover;
           height: 100%;
           ">
<div class="container">
    @yield('content')
</div>
</div>
</body>
</html>