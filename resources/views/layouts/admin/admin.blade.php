<!doctype html>
<html lang="en">
	
<!-- Mirrored from www.kodingwife.com/demos/unify-dashboards/design-4/dashboard4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jul 2023 23:50:34 GMT -->
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Unify Admin Panel" />
		<meta name="keywords" content="Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Themeforest" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="shortcut icon" href="img/favicon.ico" />
		<title>Unify Admin Dashboard</title>

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
		
		<!-- Common CSS -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}"/>
		<link rel="stylesheet" href="{{ asset('fonts/icomoon/icomoon.css')}}"/>
		<link rel="stylesheet" href="{{ asset('css/main.css')}}"/>

		<!-- Other CSS includes plugins - Cleanedup unnecessary CSS -->
		<!-- Chartist css -->
		<link href="{{ asset('vendor/chartist/css/chartist.min.css" rel="stylesheet')}}"/>
		<link href="{{ asset('vendor/chartist/css/chartist-custom.css" rel="stylesheet')}}"/>

		<!-- Data Tables -->
		<link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bs4.css')}}"/>
		<link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bs4-custom.css')}}"/>		


        <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />


	</head>
	<body>

        @include('layouts.admin.loader')

        @yield('content')


        	<!-- jQuery first, then Tether, then other JS. -->
		<script src="{{ asset('js/jquery.js')}}"></script>
		<script src="{{ asset('js/tether.min.js')}}"></script>
		<script src="{{ asset('js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('vendor/unifyMenu/unifyMenu.js')}}"></script>
		<script src="{{ asset('vendor/onoffcanvas/onoffcanvas.js')}}"></script>
		<script src="{{ asset('js/moment.js')}}"></script>

		<!-- Slimscroll JS -->
		<script src="{{ asset('vendor/slimscroll/slimscroll.min.js')}}"></script>
		<script src="{{ asset('vendor/slimscroll/custom-scrollbar.js')}}"></script>

		<!-- Chartist JS -->
		<script src="{{ asset('vendor/chartist/js/chartist.min.js')}}"></script>
		<script src="{{ asset('vendor/chartist/js/chartist-tooltip.js')}}"></script>
		<script src="{{ asset('vendor/chartist/js/custom/custom-line-chart.js')}}"></script>
		<script src="{{ asset('vendor/chartist/js/custom/custom-line-chart1.js')}}"></script>
		<script src="{{ asset('vendor/chartist/js/custom/custom-pie-charts.js')}}"></script>

		<!-- JVector Maps -->
		<script src="{{ asset('vendor/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
		<script src="{{ asset('vendor/jvectormap/world-mill-en.js')}}"></script>
		<script src="{{ asset('vendor/jvectormap/gdp-data.js')}}"></script>

		<!-- Custom JVector Maps -->
		<script src="{{ asset('vendor/jvectormap/custom/world-map-markers.js')}}"></script>

		<!-- Data Tables -->
		<script src="{{ asset('vendor/datatables/dataTables.min.js')}}"></script>
		<script src="{{ asset('vendor/datatables/dataTables.bootstrap.min.js')}}"></script>
		
		<!-- Custom Data tables -->
		<script src="{{ asset('vendor/datatables/custom/custom-datatables.js')}}"></script>
		<script src="{{ asset('vendor/datatables/custom/fixedHeader.js')}}"></script>

		<!-- Common JS -->
		<script src="{{ asset('js/common.js')}}"></script>
		
	</body>

<!-- Mirrored from www.kodingwife.com/demos/unify-dashboards/design-4/dashboard4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jul 2023 23:50:47 GMT -->
</html>