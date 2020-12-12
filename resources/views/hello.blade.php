@extends('layout.default')

@section('content')
<h1>Hello view </h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nisi, fugiat voluptatum optio laboriosam nihil ipsam rerum incidunt, amet reprehenderit natus enim doloribus sequi debitis sint delectus maiores quas officia.</p>

<p>{{number_format(3500.93044,2)}}</p>
<p>{{Date('d-m-Y')}}</p>

@php
for($i=0; $i<10;$i++)
echo $i."<br>";
@endphp

@include('partials.newsletter')
@endsection('content')