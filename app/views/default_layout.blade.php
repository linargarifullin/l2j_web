<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="content-type" content="text/html" charset="UTF-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<title>Welcome to {{ $app['proj_name'] }} | {{ $page_title }}</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- 	Native CSS 		-->
	<link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css" />

	<!-- 	 Favicon 	 	-->
	<link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png" />

	<!--[if lt IE 9]>
	<script src="../packages/todo/js/ie/respond.min.js" cache="false"></script>
	<script src="../packages/todo/js/ie/html5.js" cache="false"></script>
	<script src="../packages/todo/js/ie/fix.js" cache="false"></script>
	<![endif]-->
</head>

<body>

	@yield('content')

	<!-- footer -->
	<footer id="footer">
		<p>
			<small>
				An <a href="../">Linar Garifullin</a> &copy;2014 application
			</small>
		</p>
	</footer><!-- 	./footer 	-->

	<!-- 	jQuery 	-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<!-- 	Bootstrap JavaScript 	-->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>

</html>