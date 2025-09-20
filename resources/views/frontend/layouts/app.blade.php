<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>B2B|Smart NFC Business Cards</title>

    <meta name="keywords" content="B2B Platform INFO CARD"/>
    <meta name="description"
          content="Choosing between an NFC business card and a QR code? We break down the pros and cons of speed, user experience, and branding to help you decide the best choice.">
    <meta name="author" content="b2bplatformbd.com">
    <meta name="apple-mobile-web-app-title" content="B2B">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{asset('assets/images/icons/browserconfig.xml')}}">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/favicon_io/favicon.ico')}}" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="{{ asset('assets/favicon_io/apple-touch-icon.png') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/favicon_io/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/favicon_io/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/favicon_io/favicon-16x16.png')}}">

    <link rel="mask-icon" href="{{asset('assets/images/icons/safari-pinned-tab.svg')}}" color="#666666">
    <link rel="shortcut icon" href="{{asset('assets/favicon_io/favicon.ico')}}">
    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,600,700" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->

    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-star-rating/css/star-rating.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.css') }}">


    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-shop.css') }}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/rs-plugin/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/rs-plugin/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/rs-plugin/css/navigation.css') }}">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/demos/demo-product-landing.css') }}">
    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/skins/skin-product-landing.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <!-- Head Libs -->
    <script src="{{ asset('assets/vendor/modernizr/modernizr.min.js') }}"></script>

</head>

<body data-target="#header" data-spy="scroll" data-offset="100">

<div class="body">
    @include('frontend.includes.header')
		<div role="main" class="main">
			@yield('content')
		</div>
    @include('frontend.includes.footer')
</div>


<!-- Vendor -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('assets/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
<script src="{{ asset('assets/vendor/popper/umd/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendor/common/common.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery.validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/vendor/vide/jquery.vide.min.js') }}"></script>
<script src="{{ asset('assets/vendor/vivus/vivus.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-star-rating/js/star-rating.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.js') }}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('assets/js/theme.js') }}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{ asset('assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- Demo -->
<script src="{{ asset('assets/js/demos/demo-product-landing.js') }}"></script>


<!-- Theme Initialization Files -->
<script src="{{ asset('assets/js/theme.init.js') }}"></script>
<!-- Examples -->
<script src="{{ asset('assets/js/examples/examples.image360.js') }}"></script>

<!-- Theme Custom -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>