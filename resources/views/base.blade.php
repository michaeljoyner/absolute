<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7 lt-ie10"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie10"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]>         <html lang="en" class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	@section('title')
	<title>Absolute Sport | Sports Equipment Suppliers and Manufacturers</title>
	@show
	<link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    @section('head')
    <link rel="stylesheet" href="{{ elixir('css/main.css') }}">
    @show
    @section('meta')
    	<meta name="description" content="Absolute Sport manufactures and supplies quality sporting equipment in the Southern Africa region. We provide a diverse range of products for uses ranging from international competition to backyard fun."/>
    @show
    @section('facebookmeta')
    @include('partials.facebook')
    @show
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" ></script>
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
	<div id="site_wrapper">
		<div id="site_canvas">
			<div id="site_menu">
				@yield('menu')
			</div>
			@yield('content')
		</div>
	</div>
	@section('bodyscripts')
		<script>
		$(function() {
			$('.menu-toggle').click(function() {
				$('#site_wrapper').toggleClass('show-nav');
			});
			$('body').bind('touchmove', function(ev) {
			if($('#site_wrapper').hasClass('show-nav')) {
				ev.preventDefault();
			}
			});
		});
		</script>
	@show
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-51468211-2', 'auto');
      ga('send', 'pageview');
    </script>
</body>
</html>