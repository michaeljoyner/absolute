@extends('base')
@section('title')
<title>Delivery | Absolute Sport</title>
@stop

@section('menu')
@include('partials.slidemenu')
@stop

@section('content')
@include('partials.pageheader')
<section class="delivery-main">
	<h1>Delivery</h1>
	<p>We deliver throughout South Africa, Lesotho, Namibia, Botswana, Zimbabwe and Mozambique.</p>
	<p>Please <a href="/contact">contact us</a> for a quote.</p>
	<img src="{{ asset('images/africa.png') }}" alt="delivery map">
</section>
@include('partials.footer')

@stop
