<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
        <!-- Owl Carousel Theme Default CSS -->
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
        <!-- Box Icon CSS-->
        <link rel="stylesheet" href="{{ asset('css/boxicon.min.css')}}">
        <!-- Flaticon CSS-->
        <link rel="stylesheet" href="{{ asset('fonts/flaticon/flaticon.css')}}">
        <!-- Magnific CSS -->
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{ asset('css/meanmenu.css')}}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{ asset('css/nice-select.css')}}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
		<!-- Dark CSS -->
        <link rel="stylesheet" href="{{ asset('css/dark.css')}}">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
        <!-- Title CSS -->
        <title>Jobi - dashboard</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('img/favicon.png')}}">  
    </head>
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
       
    </x-slot>

    @yield('content')



    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- jQuery first, then Bootstrap JS -->
<script src="{{ asset('js/jquery.min.js')}}"></script>
		<script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
		<!-- Owl Carousel JS -->
		<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
		<!-- Nice Select JS -->
		<script src="{{ asset('js/jquery.nice-select.min.js')}}"></script>
		<!-- Magnific Popup JS -->
		<script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
		<!-- Subscriber Form JS -->
		<script src="{{ asset('js/jquery.ajaxchimp.min.js')}}"></script>
		<!-- Form Velidation JS -->
		<script src="{{ asset('js/form-validator.min.js')}}"></script>
		<!-- Contact Form -->
		<script src="{{ asset('js/contact-form-script.js')}}"></script>
		<!-- Meanmenu JS -->
		<script src="{{ asset('js/meanmenu.js')}}"></script>
		<!-- Custom JS -->
		<script src="{{ asset('js/custom.js')}}"></script>