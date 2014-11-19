@extends('base')
@section('title')
<title>About Us | Absolute Sport</title>
@stop

@section('meta')
<meta name="description" content="All about Absolute Sport, the company, the team and our inspiration to supply and manufacture quality sports equipment for South Africa and Southern Africa."/>
@stop

@section('menu')
@include('partials.slidemenu')
@stop

@section('content')
@include('partials.pageheader')
<section class="about-main">
	<h1 class="section-title">The Company</h1>
		<p>We are a Kwa-Zulu Natal based supplier and manufacturer of quality sports equipment.  We are dedicated to providing a diverse range of products that are made with the highest international standards in mind. We have a product range that will meet your specific requirements and budget, for uses ranging from international level competition to back yard fun. Our factory has the capabilities to manufacture, design and enhance any product you require.</p>
	<h1 class="section-title">The Team</h1>
		<p>Absolute Sport started from humble beginnings in a garage workshop where our factory manager built his first set of soccer goals for his young son. Realizing the need and opportunity for such a company in South Africa, a former teacher and sports co-ordinator, an ex-provincial sportsman and our armchair sports expert and occasional engineer came together to start Absolute Sport. What has made this company so successful is that the management team and our employees have one common passion. That passion is sport and seeing South African sportsmen and sportswomen succeed. In order to succeed athletes require the best possible training and match day equipment. </p>
	<h1 class="section-title">Inspiration</h1>
		<p>South Africa's rich cultural kaleidoscope makes this country so special. With eleven official languages it would seem an impossible dream that the Rainbow Nation could ever function and indeed thrive under such trying circumstances. However there is one recurring element that brings this country together - sport. From the 1995 Rugby World Cup illustrating the power of forgiveness to the 2010 Soccer World Cup where a country came together and eleven languages became one voice. Sport is truly unifying.</p>
</section>
@include('partials.footer')

@stop
