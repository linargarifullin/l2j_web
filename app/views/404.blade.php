<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html" charset="UTF-8">
	<meta name="description" content="404 Page Not Found">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>{{ Config::get('const.proj_name') }} | {{ $page_title }}</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../packages/todo/css/app.css" type="text/css" />
	<link rel="stylesheet" href="../css/auth.css" type="text/css" />
	<link rel="icon" href="../img/favicon.png" type="image/png" />
	<style>
		body {
			margin-top: 20px;
			text-align: center;
		}
		a:hover {
			text-decoration: none;
		}
	</style>
</head>
<body>

<div class="container">
	<!-- 	Website logo & title 	-->
	<a href="../" class="nav-brand m-b-sm" title="To Home Page">
		<img src="../img/logo_60x60.png" alt="{{ Config::get('const.proj_name') }}">
		{{ Config::get('const.proj_name') }}
	</a>

	<br><br>

	<h1>{{ $page_title }}</h1>

	<p class="lead">
		This link appears to be broken. Please go back to the <a href="../" style="text-decoration: underline; color: #0080FF;">Home Page</a> and try again.
	</p>

</div><!-- /.container -->

</body>
</html>