@extends('base')
@section('title')
<title>Contact | Absolute Sport</title>
@stop

@section('menu')
@include('partials.slidemenu')
@stop

@section('content')
@include('partials.pageheader')
<section class="contact-main">
	<h1>Contact Us</h1>
	<p>Complete the form and we'll get back to you!</p>
	<p>Or feel free to contact us by phone or email</p>

	{!! Form::open(['route' => 'contact_path', 'class' => 'contact-form']) !!}
		<div class="form-group">
			{!! $errors->first('name', '<p class="error-message">:message</p>') !!}
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name', null, ['placeholder' => 'Your Name']) !!}
		</div>
		<div class="form-group">
			{!! $errors->first('email', '<p class="error-message">:message</p>') !!}
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email', null, ['placeholder' => 'Your email, so we can reply']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('phone', 'Phone Number:') !!}
			{!! Form::text('phone', null, ['placeholder' => 'Leave your number if you would like us to call']) !!}
		</div>
		<div class="form-group">
			{!! $errors->first('message', '<p class="error-message">:message</p>') !!}
			{!! Form::label('message', 'Message:') !!}
			{!! Form::textarea('message', null, ['placeholder' => 'Your message...']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('','') !!}
			{!! Form::submit('Send', ['id' => 'form-submit']) !!}
		</div>
	{!! Form::close() !!}
	<div class="contact-details">
		<p class="phone-detail">
			<img src="{{ asset('images/phone_icon.png') }}" alt="phone number"><span>+27 83 257 9611</span>
		</p>
		<p class="mail-detail">
			<img src="{{ asset('images/email_icon.png') }}" alt="email address"><span>&#x72;&#x79;&#x61;&#x6E;&#x40;&#x61;&#x62;&#x73;&#x6F;&#x6C;&#x75;&#x74;&#x65;&#x73;&#x70;&#x6F;&#x72;&#x74;&#x2E;&#x63;&#x6F;&#x2E;&#x7A;&#x61;</span>
		</p>
	</div>
</section>
@include('partials.footer')

@stop
