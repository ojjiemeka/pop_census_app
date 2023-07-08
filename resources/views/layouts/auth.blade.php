<!doctype html>
<html lang="en">
	
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Unify Admin Panel" />
		<meta name="keywords" content="Signup, Login, Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Themeforest" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="shortcut icon" href="img/favicon.ico" />
		<title>Admin Dashboard</title>
		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
		
		<!-- Common CSS -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{ asset('fonts/icomoon/icomoon.css')}}" />

		<!-- Mian and Login css -->
		<link rel="stylesheet" href="{{ asset('css/main.css')}}" />

        <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
	</head>  

	<body class="login-bg">
        @yield('content')
	</body>

</html>