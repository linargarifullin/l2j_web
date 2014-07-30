<!DOCTYPE html>
<html lang="en">

<head>
	@include('_partials/head')

	<link rel="stylesheet" href="{{ asset('css/auth.css') }}" type="text/css" />
</head>

<body>

	<div class="container">
		<!-- 	Website logo & title 	-->
		<a class="nav-brand m-b-sm" href="../" title="To Home Page">
			<img src="../img/logo_60x60.png" alt="ScorEvents">
			{{ Config::get('const.proj_name') }}
		</a>

		<div class="row">
			<div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">

				<!-- 	Error messages (form) 	-->
				@if ($errors->any())
					<div class="form-group m-t-lg">
						<div class="alert alert-danger">
							<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
							</ul>
						</div>
					</div>

				<!-- 	Error messages (session)	-->
				@elseif (Session::has('error_msg'))
					<div class="form-group m-t-lg">
						<div class="alert alert-danger">
							{{ Session::get('error_msg') }}
						</div>
					</div>

				<!-- 	Success messages (session) 	-->
				@elseif (Session::has('success_msg'))
					<div class="form-group m-t-lg">
						<div class="alert alert-success">
							{{ Session::get('success_msg') }}
						</div>
					</div>
				@endif

				<!-- 	Page Content 	-->
				@yield('content')

			</div>
		</div>
	</div><!-- /.container -->


	@include('_partials/footer')

</body>

</html>