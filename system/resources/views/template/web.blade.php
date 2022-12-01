<!DOCTYPE html>
<html lang="en">
<head>
	<title> Prodi Perawatan dan Perbaikan Mesin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="{{ url('public') }}/politap.png"/>
	<link rel="stylesheet" type="text/css" href="{{ url('public/web') }}/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ url('public/web') }}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ url('public/web') }}/vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="{{ url('public/web') }}/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="{{ url('public/web') }}/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="{{ url('public/web') }}/vendor/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="{{ url('public/web') }}/vendor/revolution/css/navigation.css">
	<link rel="stylesheet" type="text/css" href="{{ url('public/web') }}/vendor/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="{{ url('public/web') }}/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="{{ url('public/web') }}/vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="{{ url('public/web') }}/vendor/MagnificPopup/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="{{ url('public/web') }}/css/util.min.css">	
	<link rel="stylesheet" type="text/css" href="{{ url('public/web') }}/css/main.css">
</head>
<body class="animsition">

	<!-- Header -->
	<header>
		@include('section.web.header')
	</header>

	@yield('content')

	
	<!-- Footer -->
	@include('section.web.footer')

	
	<script src="{{ url('public/web') }}/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="{{ url('public/web') }}/vendor/animsition/js/animsition.min.js"></script>
	<script src="{{ url('public/web') }}/vendor/bootstrap/js/popper.js"></script>
	<script src="{{ url('public/web') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="{{ url('public/web') }}/vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="{{ url('public/web') }}/vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script src="{{ url('public/web') }}/vendor/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script src="{{ url('public/web') }}/vendor/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="{{ url('public/web') }}/vendor/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="{{ url('public/web') }}/vendor/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="{{ url('public/web') }}/vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="{{ url('public/web') }}/vendor/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="{{ url('public/web') }}/vendor/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="{{ url('public/web') }}/vendor/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="{{ url('public/web') }}/vendor/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="{{ url('public/web') }}/js/revo-custom.js"></script>
	<script src="{{ url('public/web') }}/vendor/select2/select2.min.js"></script>
	<script src="{{ url('public/web') }}/vendor/parallax100/parallax100.js"></script>
	<script src="{{ url('public/web') }}/vendor/waypoint/jquery.waypoints.min.js"></script>
	<script src="{{ url('public/web') }}/vendor/countterup/jquery.counterup.min.js"></script>
	<script src="{{ url('public/web') }}/vendor/slick/slick.min.js"></script>
	<script src="{{ url('public/web') }}/js/slick-custom.js"></script>
	<script src="{{ url('public/web') }}/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script src="{{ url('public/web') }}/js/main.js"></script>


	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="{{ url('public/web') }}/js/map-custom.js"></script>
	<script src="{{ url('public/web') }}/js/contact.js"></script>

	
</body>
</html>