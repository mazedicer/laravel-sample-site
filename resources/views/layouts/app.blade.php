<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Laravel Sample Site by Mario Carrizales</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	</head>
	<body>
		@include('inc.navbar')
		<div class="container">
			<div class="row">
				@include('inc.message')
			</div>
			@yield('content')
		</div>
		<footer id="footer" class="text-center">
			<p>Copyright 2017 &copy; Mario Carrizales</p>
		</footer>
	</body>
</html>

