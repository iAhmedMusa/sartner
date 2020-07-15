<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Title -->
	<title>@yield('title', 'Satner Portfolio')</title>

    <!-- Meta data -->
    <meta name='subtitle' content='subtitle'>
	<meta name="author" content="author" />
	<meta name="description" content="@yield('seo_description')" />
	<meta name="Resource-type" content="@yield('seo_resource_type')" />
	<meta name="keywords" content="@yield('seo_keywords')" />
	<link rel="image_src" href="@yield('seo_image')" />

	@include('front.partials.favicon')


	 <!-- Styles -->
	 <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	 
	 {{-- <link rel="stylesheet" href="{{ asset('vendor/woow-icon/style.css') }}"> --}}
	 <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}">
	 {{-- <link rel="stylesheet" href="{{ asset('css/front/fonts.css') }}"> --}}
	 <link rel="stylesheet" href="{{ asset('vendor/bootstrap_v4.3.1/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('vendor/swiper/package/css/swiper.min.css') }}">
     
	 
	 <!-- Theme CSS -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/footer.css') }}">

	 @stack('custom-style')
	 
	 <!--[if lt IE 9]>
		 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		 <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		 <link rel='stylesheet' href="css/ie/ie8.css">
	 <![endif]-->

</head>
<body>
	<div id="page-container">  
		@include('front.partials.navbar')
		<div class="main">
		   @yield('content')
		</div>
        @include('front.partials.footer')
        @yield('content-without-footer')
	</div>
	<!-- Scripts -->
	{{-- <script src="{{ asset('vendor/jquery_v3.3.1/jquery.min.js') }}"></script>
	<script src="{{ asset('js/admin/popper.min.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap_v4.3.1/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('vendor/select2/js/select2.min.js') }}"></script>
	<script src="{{ asset('vendor/swiper/package/js/swiper.min.js') }}"></script>
	<script src="{{ asset('js/tmpl.min.js') }}"></script> --}}

	<!-- Common Scripts -->
	<script>
		var SITEURL = "{{ URL::to('') }}";
		$(document).ready(function() {
		$.ajaxSetup({
				headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
			});
		});
		var no_data_found = 'No data found';
	</script>
	{{-- <script src="{{ asset('js/admin/main.js') }}"></script> --}}

	@stack('custom-scripts')

</body>
</html>