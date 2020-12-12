<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <a href="{{route('home',['name'=>'Milestone'])}}">Home</a>|
    <a href="{{route('service')}}">Services</a>|
    <a href="">About us</a>|
    <a href="">Contact us</a>
    <hr>
    </div>

    <div>
    @yield('content')
    </div>
    <div>
    <hr>
    <p><Strong>Copyright 2020 - the larashop</Strong></p>
    </div>
</body>
</html>