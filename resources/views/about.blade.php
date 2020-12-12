@extends('layout.default')

@section('content')
<h1>Hello {{$name}}</h1>
    @if($login)
    <h2>Welcome to dashboard</h2>
    @else
    <h2>You need to login to see the dashboard</h2>
    @endif

    @foreach($roots as $root)
    <h3>The root of {{$root}} is {{$root*$root}}</h3>
    @endforeach

    @include('partials.newsletter')
    @endsection